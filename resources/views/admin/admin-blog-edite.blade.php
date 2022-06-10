<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG ADMIN FORMULAIRE</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
          <form action="https://formbold.com/s/FORM_ID" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
              <label
                for="name"
                class="mb-3 block text-base font-medium text-[#07074D]"
              >
                TITRE
              </label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Choisissez un titre"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
              />
            </div>
            <div class="form-group">
                <label
                  for="subject"
                  class="mb-3 block text-base font-medium text-[#07074D]"
                >
                  Description
                </label>
                <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
            </div>
    
            
            <div>
              <button
                class="hover:shadow-form rounded-md bg-[#80f164] py-3 px-8 text-base font-semibold text-black outline-none mt-7"
              >
               Ajouter
              </button>
            </div>
          </form>
        </div>
      </div>
</body>
            <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            <script type="text/javascript">
                CKEDITOR.replace('wysiwyg-editor', {
                    filebrowserUploadUrl: "{{route('admin-blog-create', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });
            </script>
</html>
