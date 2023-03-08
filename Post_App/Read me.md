Excercise: Building a Simple Blog API with PHP and Filesystem Database

   Endpoint 1: Create a new post
    The endpoint should receive a POST request with the following parameters:
    Title: The title of the post (string).
    Content: The content of the post (string).
    The endpoint should create a new post and store it in a file using a simple database engine built using the filesystem. Each post should be stored in a separate file with a unique identifier (e.g., a timestamp or a random string). The file should contain the title, content, and creation date of the post.

   Endpoint 2: Get all posts
    The endpoint should receive a GET request and return a JSON response with all the posts stored in the database. Each post should be represented as a JSON object with the following properties:
    ID: The unique identifier of the post (string).
    Title: The title of the post (string).
    Content: The content of the post (string).
    Date: The creation date of the post (string).

CRUD (Create/Read/Update/Delete)
   Modify the existing endpoint for creating new posts to allow updating of existing posts.
   Add a new endpoint for deleting posts, which should receive a request with the post ID as a parameter.
   Modify the existing endpoint for retrieving posts to allow retrieving a single post by ID.
   Test the API with various inputs, both valid and invalid, to ensure that the CRUD functionality is working correctly.