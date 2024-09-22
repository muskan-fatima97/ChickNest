<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin Dashboard</title>
    <style>
        .container {
            margin-top: 50px;
        }
        .img-preview {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            display: none;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">Admin Dashboard</h1>
    <div class="text-end mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addEditModal">Add New Post</button>
    </div>
    <div class="row" id="posts-container">
        <!-- Dynamic Content Here -->
    </div>
    <h2 class="text-center mt-5">Blog Posts Table</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image URL</th>
            </tr>
        </thead>
        <tbody id="posts-table-body">
            <!-- Dynamic Content Here -->
        </tbody>
    </table>
</div>

    <!-- Add/Edit Modal -->
    <div class="modal fade" id="addEditModal" tabindex="-1" aria-labelledby="addEditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEditModalLabel">Add/Edit Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="postForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="imageFile" class="form-label">Image</label>
                            <input type="file" class="form-control" id="imageFile" accept="image/*" required>
                            <img id="imagePreview" class="img-preview" src="" alt="Image Preview">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" required></textarea>
                        </div>
                        <input type="hidden" id="postId">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
    loadPosts();

    // Load posts from the server
    function loadPosts() {
        $.ajax({
            url: 'get_posts.php',
            method: 'GET',
            success: function(data) {
                const response = JSON.parse(data);
                $('#posts-container').html(response.cards);
                $('#posts-table-body').html(response.table);
            }
        });
    }

    // Image file input change event
    $('#imageFile').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(file);
        } else {
            $('#imagePreview').hide();
        }
    });

    // Add/Edit post form submission
    $('#postForm').on('submit', function(e) {
        e.preventDefault();
        const formData = new FormData();
        formData.append('id', $('#postId').val());
        formData.append('imageFile', $('#imageFile')[0].files[0]);
        formData.append('title', $('#title').val());
        formData.append('description', $('#description').val());

        $.ajax({
            url: 'save_post.php',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#addEditModal').modal('hide');
                loadPosts();
            }
        });
    });

    // Edit post button click
    $(document).on('click', '.edit-btn', function() {
        const post = $(this).data('post');
        $('#postId').val(post.id);
        $('#title').val(post.title);
        $('#description').val(post.description);
        $('#imagePreview').attr('src', post.imageURL).show();
        $('#addEditModal').modal('show');
    });

    // Delete post button click
    $(document).on('click', '.delete-btn', function() {
        const postId = $(this).data('id');
        if (confirm('Are you sure you want to delete this post?')) {
            $.ajax({
                url: 'delete_post.php',
                method: 'POST',
                data: { id: postId },
                success: function(response) {
                    loadPosts();
                }
            });
        }
    });
});

    </script>
</body>
</html>
