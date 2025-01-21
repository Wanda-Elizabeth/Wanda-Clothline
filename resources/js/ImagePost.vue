<template>
    <div>
        <h2>Upload Image</h2>

        <!-- Drag and Drop Container -->
        <div
            class="drag-drop-area"
            @dragover.prevent
            @dragenter.prevent
            @dragleave="isDragging = false"
            @drop="handleDrop"
            :class="{ 'dragging': isDragging }"
        >
            <p v-if="!selectedImage">Drag and drop an image here, or click to select</p>
            <p v-if="selectedImage">Selected: {{ selectedImage.name }}</p>
            <input type="file" @change="handleFileChange" ref="fileInput" hidden />
        </div>

        <button @click="triggerFileInput" :disabled="isUploading">Select File</button>

        <!-- Category Dropdown -->
        <div class="form-group">
            <label for="category">Category:</label>
            <select
                v-model="category"
                id="category"
                class="form-control"
                :disabled="isUploading"
            >
                <option value="" disabled selected>Select category</option>
                <option v-for="category in categories" :key="category.id" :value="category.id">
                    {{ category.name }}
                </option>
            </select>
        </div>

        <!-- Price Input -->
        <div class="form-group">
            <label for="price">Price:</label>
            <input
                type="number"
                v-model="price"
                id="price"
                class="form-control"
                placeholder="Enter price"
                :disabled="isUploading"
            />
        </div>

        <button
            @click="uploadImage"
            :disabled="!selectedImage || isUploading || !category || !price"
        >
            Upload
        </button>

        <!-- Success message -->
        <div v-if="successMessage" class="success-message">
            <p>{{ successMessage }}</p>
        </div>

        <!-- Error message -->
        <div v-if="errorMessage" class="error-message">
            <p>{{ errorMessage }}</p>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "ImageUpload",
    data() {
        return {
            selectedImage: null,
            isDragging: false,
            isUploading: false,
            successMessage: null,
            errorMessage: null,
            category: "",
            price: null,
            categories: [],
        };
    },
    mounted() {
        this.fetchCategories();
    },
    methods: {
         fetchCategories() {
            axios.get("/api/categories").then((response) => {
                this.categories = response.data;
                console.log(this.categories)
            });
        },
        handleFileChange(event) {
            this.selectedImage = event.target.files[0];
        },
        handleDrop(event) {
            event.preventDefault();
            this.isDragging = false;

            if (event.dataTransfer.files.length > 0) {
                this.selectedImage = event.dataTransfer.files[0];
            }
        },
        triggerFileInput() {
            this.$refs.fileInput.click();
        },
        async uploadImage() {
            if (!this.selectedImage || !this.category || !this.price) return;

            const formData = new FormData();
            formData.append("image", this.selectedImage);
            formData.append("category", this.category);
            formData.append("price", this.price);

            this.isUploading = true;
            try {
                await axios.post("/api/upload", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                });

                this.successMessage = "Image uploaded successfully!";
                this.errorMessage = null;
                this.selectedImage = null;
                this.category = "";
                this.price = null;
            } catch (error) {
                this.errorMessage = "Failed to upload image.";
                this.successMessage = null;
            } finally {
                this.isUploading = false;
            }
        },
    },
};
</script>

<style scoped>
/* Drag and Drop Area Styling */
.drag-drop-area {
    border: 2px dashed #ccc;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.drag-drop-area.dragging {
    background-color: #f0f8ff;
    border-color: #2196f3;
}

/* Form Styling */
.form-group {
    margin-top: 15px;
}
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}
.form-control {
    width: 100%;
    padding: 8px;
    border: 1px solid #cccccc;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}
.form-control:focus {
    border-color: #2196f3;
    outline: none;
}

/* Button Styling */
button {
    margin-top: 15px;
    padding: 10px 20px;
    background-color: pink;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}
button:hover {
    background-color: #1976d2;
}
button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Success and Error Messages */
.success-message {
    color: green;
    margin-top: 10px;
}
.error-message {
    color: red;
    margin-top: 10px;
}
</style>
