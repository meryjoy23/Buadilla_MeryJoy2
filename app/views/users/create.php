<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enroll Student</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(to bottom right, #3e2723, #d7ccc8);
    }
    .font-title {
      font-family: 'Playfair Display', serif;
      letter-spacing: 1px;
    }
    .btn-hover:hover {
      box-shadow: 0 0 15px #d7ccc8, 0 0 25px #6d4c41;
      transform: scale(1.05);
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">

  <div class="bg-[#f5e6ca] p-8 rounded-3xl shadow-2xl w-full max-w-md border-4 border-[#6d4c41]">

    <div class="flex flex-col items-center mb-6">
      <div class="bg-gradient-to-br from-[#4e342e] to-[#a1887f] rounded-full p-4 shadow-md">
        <i class="fa-solid fa-mug-saucer text-[#f5e6ca] text-3xl"></i>
      </div>
      <h2 class="font-title text-2xl text-[#3e2723] mt-3">Add New Student</h2>
    </div>

    <form action="<?=site_url('users/create')?>" method="POST" class="space-y-5">
      <div>
        <label class="block text-[#3e2723] mb-1 font-bold">First Name</label>
        <input type="text" name="first_name" required placeholder="enter first name"
               class="w-full px-4 py-3 border-2 border-[#6d4c41] rounded-xl focus:ring-2 focus:ring-[#a1887f] shadow-sm">
      </div>

      <div>
        <label class="block text-[#3e2723] mb-1 font-bold">Last Name</label>
        <input type="text" name="last_name" required placeholder="enter last name"
               class="w-full px-4 py-3 border-2 border-[#6d4c41] rounded-xl focus:ring-2 focus:ring-[#a1887f] shadow-sm">
      </div>

      <div>
        <label class="block text-[#3e2723] mb-1 font-bold">Email</label>
        <input type="email" name="email" required placeholder="enter your email"
               class="w-full px-4 py-3 border-2 border-[#6d4c41] rounded-xl focus:ring-2 focus:ring-[#a1887f] shadow-sm">
      </div>

      <button type="submit"
              class="btn-hover w-full bg-gradient-to-r from-[#4e342e] to-[#a1887f] text-[#f5e6ca] font-bold py-3 rounded-xl shadow-lg transition">
         Add
      </button>
    </form>
  </div>
</body>
</html>
