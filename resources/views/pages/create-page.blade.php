@extends('layouts.layout')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <form class="mb-9" action="{{ route('store-page', isset($page) ? $page->id : '') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">{{ isset($page) ? 'Edit Page' : 'Add New Page' }}</h2>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Save</button>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="card mb-6">
                    <div class="card-body">
                        <div class="">
                            <h4 class="mb-3">Page Content</h4>
                            <textarea class="form-control mb-2" rows="5" name="content" id="content" placeholder="Page Content...">{{ old('content', $page->content ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <div x-data="galleryManager()" class="card mb-3">
                    <div class="card-body">
                        <div id="galleryContainer">
                            <!-- Gallery Section -->
                            <template x-for="(gallery, galleryIndex) in galleries" :key="galleryIndex">
                                <div class="galleryImagesDiv mb-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <h5 class="mb-2 text-body-highlight">Gallery Title (Optional)</h5>
                                        <button type="button" class="btn btn-danger" @click="removeGallery(galleryIndex)">Remove Gallery</button>
                                    </div>
                                    <input class="form-control mb-xl-3" type="text" x-model="gallery.title" :name="'gallery_title[' + galleryIndex + ']'" placeholder="Gallery Title (Optional)...">
                                    <div class="galleryImageContainer">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h5 class="mb-0">Gallery Images</h5>
                                            <!-- Multiple image upload button -->
                                            <div class="d-flex align-items-center">
                                                <label class="btn btn-outline-primary mb-0 me-2" :for="'multiple-upload-' + galleryIndex">
                                                    <i class="fas fa-cloud-upload-alt me-2"></i>Upload Multiple Images
                                                </label>
                                                <input 
                                                    type="file" 
                                                    :id="'multiple-upload-' + galleryIndex" 
                                                    @change="handleMultipleImageUpload($event, galleryIndex)" 
                                                    multiple 
                                                    accept=".jpg, .png, .jpeg" 
                                                    style="display: none;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <template x-for="(image, imageIndex) in gallery.images" :key="imageIndex">
                                                <div class="col-12 col-md-4 mb-4">
                                                    <div class="form-control" style="height: 200px; position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center; overflow: hidden;">
                                                        <!-- Add Delete Image Button -->
                                                        <button 
                                                            type="button" 
                                                            class="btn btn-sm btn-danger position-absolute" 
                                                            @click="removeImage(galleryIndex, imageIndex)"
                                                            style="top: 5px; right: 5px; z-index: 10;"
                                                            title="Delete Image">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                        
                                                        <div x-show="!image.src" class="text-center">
                                                            <button class="btn btn-link p-0" type="button" @click="browseImage(galleryIndex, imageIndex)" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Browse from device</button>
                                                        </div>
                                                        <img x-show="image.src" :src="image.src" class="mt-3" alt="Image" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                                        <input type="file" @change="handleImageUpload($event, galleryIndex, imageIndex)" :name="'gallery_images[' + galleryIndex + '][files][]'" accept=".jpg, .png, .jpeg" style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; opacity: 0">
                                                        <input type="hidden" :name="'gallery_images[' + galleryIndex + '][file_ids][' + imageIndex + ']'" :value="image.id">
                                                    </div>
                                                    <div class="captionContainer mt-2">
                                                        <input class="form-control mb-2" type="text" x-model="image.caption" :name="'image_captions[' + galleryIndex + '][' + imageIndex + ']'" placeholder="Image Caption">
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                        <div class="text-center" x-show="gallery.images.length === 0">
                                            <p class="text-muted my-4">No images added to this gallery yet</p>
                                        </div>
                                        <button type="button" class="btn btn-primary addMoreImages" @click="addMoreImages(galleryIndex)">
                                            <i class="fas fa-plus me-2"></i>Add Image
                                        </button>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div style="display: flex; justify-content: end" class="mt-4">
                            <button type="button" class="btn btn-primary" @click="addGallery">
                                <i class="fas fa-plus me-2"></i>Add Gallery
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="row g-2">
                    <div class="col-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="col-auto">
                                    <h4 class="mb-4">Page Details</h4>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-4">
                                            <h5 class="mb-2 text-body-highlight">Page Name</h5>
                                            <input class="form-control mb-xl-3" type="text" name="name" placeholder="Page Name..." value="{{ old('name', $page->name ?? '') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @push('scripts')
    <script src="https://cdn.tiny.cloud/1/kx1w8e3jzdc9tkvt7d3xgz8eywqduf8pt454wxkl49wh8xy5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> 
    <script> 
        tinymce.init({ 
            selector: '#content', 
            images_upload_url: 'postAcceptor.php', 
            plugins: [ 'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak', 'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime', 'media', 'table', 'emoticons', 'help' ], 
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor emoticons', 
            height: 300 
        }); 
    </script>
    
    <script>
        function galleryManager() {
            return {
                galleries: @json($galleries),

                addGallery() {
                    this.galleries.push({
                        title: '',
                        images: []
                    });
                },

                removeGallery(index) {
                    if (confirm('Are you sure you want to remove this gallery? This will permanently delete all images in this gallery.')) {
                        const gallery = this.galleries[index];
                        
                        const fileIds = gallery.images
                            .filter(image => image.id)
                            .map(image => image.id);

                        if (fileIds.length > 0) {
                            fetch(/admin/delete-gallery-media/${fileIds.join(',')}, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json'
                                }
                            }).then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    this.galleries.splice(index, 1);
                                    this.$nextTick(() => {
                                        this.galleries = [...this.galleries];
                                    });
                                    alert('Gallery deleted successfully');
                                } else {
                                    alert('Failed to delete gallery: ' + (data.errors?.join(', ') || 'Unknown error'));
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Failed to delete gallery: ' + error.message);
                            });
                        } else {
                            this.galleries.splice(index, 1);
                            this.$nextTick(() => {
                                this.galleries = [...this.galleries];
                            });
                        }
                    }
                },

                removeImage(galleryIndex, imageIndex) {
                    if (confirm('Are you sure you want to delete this image?')) {
                        const image = this.galleries[galleryIndex].images[imageIndex];
                        
                        if (image.id) {
                            // If the image has an ID, it needs to be deleted from the server
                            fetch(/admin/delete-image/${image.id}, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json'
                                }
                            }).then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                if (data.success) {
                                    this.galleries[galleryIndex].images.splice(imageIndex, 1);
                                    
                                    this.$nextTick(() => {
                                        this.galleries = [...this.galleries];
                                    });
                                    
                                    alert('Image deleted successfully');
                                } else {
                                    alert('Failed to delete image: ' + (data.errors?.join(', ') || 'Unknown error'));
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Failed to delete image: ' + error.message);
                            });
                        } else {
                            // If the image doesn't have an ID (newly added), just remove it from the array
                            this.galleries[galleryIndex].images.splice(imageIndex, 1);
                            
                            this.$nextTick(() => {
                                this.galleries = [...this.galleries];
                            });
                        }
                    }
                },

                addMoreImages(galleryIndex) {
                    this.galleries[galleryIndex].images.push({ src: '', caption: '' });
                },

                // Function to programmatically browse for images
                browseImage(galleryIndex, imageIndex) {
                    // Find the file input for this image and click it
                    const fileInputs = document.querySelectorAll(input[name="gallery_images[${galleryIndex}][files][]"]);
                    if (fileInputs[imageIndex]) {
                        fileInputs[imageIndex].click();
                    }
                },

                // Function to handle single image upload (existing functionality)
                handleImageUpload(event, galleryIndex, imageIndex) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            this.galleries[galleryIndex].images[imageIndex].src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                },

                // New function to handle multiple image upload
                handleMultipleImageUpload(event, galleryIndex) {
                    const files = event.target.files;
                    if (!files || files.length === 0) return;
                    
                    // Process each uploaded file
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        const reader = new FileReader();
                        
                        // Create a new image object
                        const newImage = { src: '', caption: file.name.split('.')[0] }; // Use filename as default caption
                        
                        // Add the new image to the gallery
                        this.galleries[galleryIndex].images.push(newImage);
                        const newImageIndex = this.galleries[galleryIndex].images.length - 1;
                        
                        // Set up the reader to load the image data
                        reader.onload = ((imageIndex) => {
                            return (e) => {
                                // Update the image source in the gallery
                                this.galleries[galleryIndex].images[imageIndex].src = e.target.result;
                                
                                // Create a new file input for this image
                                setTimeout(() => {
                                    const fileInputs = document.querySelectorAll(input[name="gallery_images[${galleryIndex}][files][]"]);
                                    if (fileInputs[imageIndex]) {
                                        // Create a new DataTransfer object
                                        const dataTransfer = new DataTransfer();
                                        dataTransfer.items.add(file);
                                        
                                        // Set the files property of the file input
                                        fileInputs[imageIndex].files = dataTransfer.files;
                                        
                                        // Dispatch a change event to trigger any listeners
                                        const event = new Event('change', { bubbles: true });
                                        fileInputs[imageIndex].dispatchEvent(event);
                                    }
                                }, 100);
                                
                                // Force Alpine to update the UI
                                this.$nextTick(() => {
                                    this.galleries = [...this.galleries];
                                });
                            };
                        })(newImageIndex);
                        
                        // Read the file as a data URL
                        reader.readAsDataURL(file);
                    }
                    
                    // Clear the input to allow the same files to be selected again if needed
                    event.target.value = '';
                }
            };
        }
    </script>
    @endpush
@endsection