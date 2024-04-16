<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="antialiased ">


    <section class="bg-white dark:bg-gray-900 flex justify-between" style="background-image: url('storage/images/about.jpg'); background-size: cover; object-fit: cover; width: 100%;">
        <div class="py-8 mx-12 ">
            <h1 class="mb-4 text-5xl font-extrabold text-white">Report Cyber Threats: Your Safety Matters</h1>

            <p class="mb-8 mt-4 text-lg font-normal text-white">Search hundreds of walkthroughs and challenges by
                security category or difficulty.</p>
        </div>
        <div class="flex items-center justify-end mx-12">
            <img src="images/none.svg.png" alt="">
        </div>
    </section>

    <section class="">
        <div class=" ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white">
                        <form method="POST" action="action.php" class="border-2 border-black-300 p-4 m-4 rounded-lg">
                            <h1 class="text-center font-bold text-3xl p-8">Complaint Submission Form</h1>

                            <div class="mb-4 p-8">
                                <label class="text-xl text-gray-600">Type of attack... <span class="text-red-500">*</span></label><br>
                                <select name="attack" id="" class="border-2 border-gray-400 p-2 bg-[#E9ECEF] rounded-lg  w-full" name="title" id="title" value="" required>
                                    <option value="category" selected>Category</option>

                                </select>
                            </div>

                            <div class="mb-4 p-8">
                                <label class="text-xl text-gray-600">Description of the Problem... <span class="text-red-500">*</span></label><br>
                                <textarea name="content" class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full"></textarea>
                            </div>

                            <div class="mb-4 p-8">
                                <label class="text-xl text-gray-600">Preuves.. <span class="text-red-500">*</span></label><br>
                                <input type="file" class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full" name="title" id="title" value="" required placeholder=" Preuves..">
                            </div>

                            <div class="mb-4 p-8">
                                <label class="text-xl text-gray-600">Full name... <span class="text-red-500">*</span></label><br>
                                <input type="text" class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full" name="title" id="title" value="" required placeholder=" Full name...">
                            </div>

                            <div class="mb-4 p-8">
                                <label class="text-xl text-gray-600">Email... <span class="text-red-500">*</span></label><br>
                                <input type="text" class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full" name="title" id="title" value="" required placeholder="Email...">
                            </div>

                            <div class="mb-4 p-8">
                                <label class="text-xl text-gray-600">Phone number...<span class="text-red-500">*</span></label><br>
                                <input type="text" class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full" name="title" id="title" value="" required placeholder="Phone number...">
                            </div>


                            <div class="flex p-8">
                                <button type="button" class="py-2 px-4 max-w-md  flex justify-center items-center bg-white text-[#79BF00] border-2 border-[#79BF00] rounded-lg w-full">
                                    Submit complaint..
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        CKEDITOR.replace('content');
    </script>