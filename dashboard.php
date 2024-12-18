<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&family=DM+Serif+Text:ital@0;1&family=Delius&family=Playwrite+DE+VA+Guides&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Yatra+One&family=Yuji+Mai&display=swap');
      *{
        margin: 0;
        padding: 0;
      }
      body{
        font-family: "Bangers", serif;
        font-weight: 200;
        font-style: normal;
      }
  </style>
  <body class="bg-black bg-opacity-95 text-gray-100">
    <!-- Admin Dashboard -->
    <section id="admin-dashboard" class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <h2 class="text-yellow-400 text-3xl sm:text-4xl font-extrabold text-center mb-12">Tableau de Bord</h2>
      <!-- Statistiques -->
      <div class="bg-black p-6 sm:p-8 rounded-xl shadow-lg mb-12">
        <h3 class="text-xl sm:text-2xl font-semibold text-yellow-400 mb-6">Statistiques</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="bg-gray-800 bg-opacity-30 p-6 rounded-lg shadow">
            <p class="text-yellow-400 text-lg font-bold mb-2">Véhicules Loués</p>
            <p class="text-3xl font-extrabold text-gray-100">15</p>
          </div>
          <div class="bg-gray-800 bg-opacity-30 p-6 rounded-lg shadow">
            <p class="text-yellow-400 text-lg font-bold mb-2">Utilisateurs les plus actifs</p>
            <ul class="list-disc list-inside text-gray-100">
              <li>John Doe - 5 réservations</li>
              <li>Jane Smith - 4 réservations</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Validation des Utilisateurs -->
      <div class="bg-black p-6 sm:p-8 rounded-xl shadow-lg mb-12">
        <h3 class="text-xl sm:text-2xl font-semibold text-yellow-400 mb-6">Validation des Utilisateurs</h3>
        <div class="overflow-x-auto">
          <table class="w-full table-auto border-collapse">
            <thead class="bg-gray-800 bg-opacity-30">
              <tr>
                <th class="px-4 sm:px-6 py-3 text-yellow-400 text-left">Utilisateur</th>
                <th class="px-4 sm:px-6 py-3 text-yellow-400 text-left">Email</th>
                <th class="px-4 sm:px-6 py-3 text-yellow-400 text-left">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-gray-800 bg-opacity-30 transition duration-200">
                <td class="px-4 sm:px-6 py-4">John Doe</td>
                <td class="px-4 sm:px-6 py-4">john.doe@example.com</td>
                <td class="px-4 sm:px-6 py-4 flex space-x-4">
                  <button class="text-green-300 hover:text-green-500 text-2xl"><i class="fas fa-check-circle hover:scale-125"></i></button>
                  <button class="text-red-400 hover:text-red-500 text-2xl"><i class="fas fa-times-circle hover:scale-125"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Gestion des Véhicules -->
      <div class="bg-black p-6 sm:p-8 rounded-xl shadow-lg mb-12">
        <h3 class="text-xl sm:text-2xl font-semibold text-yellow-400 mb-6">Gestion des Véhicules</h3>
        <button class="shadow-md mb-6 ml-4 flex items-center">
          <i class="fas fa-plus-circle text-[24px] text-green-300 hover:text-green-500 hover:scale-125 cursor-pointer"></i>
        </button>
        <div>
          <table class="w-full table-auto border-collapse">
            <thead class="bg-gray-800 bg-opacity-30">
              <tr>
                <th class="px-4 sm:px-6 py-3 text-yellow-400 text-left">Véhicule</th>
                <th class="px-4 sm:px-6 py-3 text-yellow-400 text-left">État</th>
                <th class="px-4 sm:px-6 py-3 text-yellow-400 text-left">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-gray-800 bg-opacity-30 transition duration-200">
                <td class="px-4 sm:px-6 py-4">Toyota Corolla</td>
                <td class="px-4 sm:px-6 py-4">Disponible</td>
                <td class="px-4 sm:px-6 py-4 flex space-x-4">
                  <button class="text-yellow-400 hover:text-yellow-600 text-xl"><i class="fas fa-edit hover:scale-125"></i></button>
                  <button class="text-red-500 hover:text-red-600 text-xl"><i class="fas fa-archive hover:scale-125"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Suivi des Véhicules -->
      <div class="bg-black p-6 sm:p-8 rounded-xl shadow-lg mb-12">
        <h3 class="text-xl sm:text-2xl font-semibold text-yellow-400 mb-6">Suivi des Véhicules</h3>
        <form>
          <label for="vehicle-status" class="block text-yellow-400 text-lg sm:text-xl mb-3">Changer l'état du véhicule</label>
          <select id="vehicle-status" class="w-full px-4 py-3 bg-black rounded-lg focus:ring-2 focus:ring-yellow-400 hover:bg-black bg-opacity-30 transition duration-200">
            <option>Disponible</option>
            <option>Loué</option>
            <option>En réparation</option>
          </select>
        </form>
      </div>
    </section>
  </body>
</html>
