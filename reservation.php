<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation & Dashboard</title>
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
  <body class="bg-black text-gray-100">
    <!-- Page de Réservation -->
    <section id="reservation" class="container mx-auto px-6 py-12">
      <h2 class="text-yellow-400 text-3xl font-bold text-center mb-8">Réservation</h2>

      <!-- Filtering Section -->
      <div class="bg-gray-800 bg-opacity-30 p-6 rounded-lg mb-8">
        <h3 class="text-xl font-bold mb-4">Filtrer les voitures</h3>
        <form id="filter-form" class="grid md:grid-cols-3 gap-4">
          <div>
            <label for="type" class="block mb-2 ml-2">Type de voiture</label>
            <select id="type" class="w-full px-4 py-2 bg-black rounded-lg focus:ring-2 focus:ring-yellow-400">
              <option value="">Tous</option>
              <option value="SUV">SUV</option>
              <option value="Berline">Berline</option>
              <option value="Compacte">Compacte</option>
            </select>
          </div>
          <div>
            <label for="location" class="block mb-2 ml-2">Localisation</label>
            <select id="location" class="w-full px-4 py-2 bg-black rounded-lg focus:ring-2 focus:ring-yellow-400">
              <option value="">Toutes</option>
              <option value="Paris">Paris</option>
              <option value="Lyon">Lyon</option>
              <option value="Marseille">Marseille</option>
            </select>
          </div>
          <div>
            <label for="availability" class="block mb-2 ml-2">Disponibilité</label>
            <select id="availability" class="w-full px-4 py-2 bg-black rounded-lg focus:ring-2 focus:ring-yellow-400">
              <option value="">Toutes</option>
              <option value="available">Disponible</option>
            </select>
          </div>
        </form>
      </div>

      <!-- Vehicle Display Section -->
      <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-gray-800 bg-opacity-30 p-6 rounded-lg">
          <h3 class="text-xl font-bold mb-4">Choisissez une voiture</h3>
          <form class="space-y-4">
            <div>
              <label for="car" class="block mb-2 ml-2">Voiture</label>
              <select id="car" class="w-full px-4 py-2 bg-black rounded-lg focus:ring-2 focus:ring-yellow-400">
                <option value="car1" data-images="img1.jpg,img2.jpg">Toyota Corolla</option>
                <option value="car2" data-images="img3.jpg,img4.jpg">Honda Civic</option>
                <option value="car3" data-images="img5.jpg,img6.jpg">Ford Focus</option>
              </select>
            </div>
            <div>
              <label for="start-date" class="block mb-2 ml-2">Date de début</label>
              <input type="date" id="start-date" class="w-full px-4 py-2 bg-black bg-opacity-30 rounded-lg focus:ring-2 focus:ring-yellow-400">
            </div>
            <div>
              <label for="end-date" class="block mb-2 ml-2">Date de fin</label>
              <input type="date" id="end-date" class="w-full px-4 py-2 bg-black bg-opacity-30 rounded-lg focus:ring-2 focus:ring-yellow-400">
            </div>
          </form>
        </div>

        <!-- Vehicle Images with Modal -->
        <div class="bg-gray-800 bg-opacity-30 p-6 rounded-lg">
          <div id="car-images" class="relative h-72 w-full bg-black bg-opacity-30 rounded-lg flex items-center justify-center">
            <img src="img1.jpg" alt="Car image" class="absolute w-full h-full object-cover rounded-lg hidden" id="image1">
            <img src="img2.jpg" alt="Car image" class="absolute w-full h-full object-cover rounded-lg hidden" id="image2">
            <button id="prev" class="absolute left-2 text-yellow-400 hover:text-yellow-100 hover:scale-125 text-xl"><i class="fas fa-chevron-left"></i></button>
            <button id="next" class="absolute right-2 text-yellow-400 hover:text-yellow-100 hover:scale-125 text-xl"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
      </div>
    </section>
    <!-- Tableau de Bord Personnel -->
    <section id="dashboard" class="container mx-auto px-6 py-12 my-auto">
      <h2 class="text-yellow-400 text-3xl font-bold text-center mb-8">Tableau de Bord</h2>
      <div class="bg-gray-800 bg-opacity-30 p-6 rounded-lg w-full flex flex-col justify-center items-center">
        <table class="w-full table-auto">
          <thead>
            <tr>
              <th class="px-4 py-2 text-yellow-400">Véhicule</th>
              <th class="px-4 py-2 text-yellow-400">Statut</th>
              <th class="px-4 py-2 text-yellow-400">Actions</th>
            </tr>
          </thead>
          <tbody class="relative text-center">
            <tr class="hover:bg-black bg-opacity-30">
              <td class="px-4 py-2">Toyota Corolla</td>
              <td class="px-4 py-2">Confirmée</td>
              <td class="px-4 py-2 space-x-4">
                <button class="text-yellow-500 hover:text-yellow-200 hover:scale-[1.5] text-lg"><i class="fas fa-edit"></i></button>
                <button class="text-red-500 hover:text-red-300 hover:scale-[1.5] text-lg"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            <!-- More rows here -->
          </tbody>
        </table>
      </div>
    </section>

    <script>
      const carSelector = document.getElementById('car');
      const images = document.querySelectorAll('#car-images img');
      const prevBtn = document.getElementById('prev');
      const nextBtn = document.getElementById('next');
      let currentImageIndex = 0;

      function updateImages(imageList) {
        images.forEach((img, index) => {
          img.classList.add('hidden');
          img.src = imageList[index] || '';
        });
        if (imageList.length > 0) {
          images[0].classList.remove('hidden');
          currentImageIndex = 0;
        }
      }

      carSelector.addEventListener('change', (e) => {
        const selectedOption = e.target.options[e.target.selectedIndex];
        const imageList = selectedOption.getAttribute('data-images').split(',');
        updateImages(imageList);
      });

      prevBtn.addEventListener('click', () => {
        images[currentImageIndex].classList.add('hidden');
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        images[currentImageIndex].classList.remove('hidden');
      });

      nextBtn.addEventListener('click', () => {
        images[currentImageIndex].classList.add('hidden');
        currentImageIndex = (currentImageIndex + 1) % images.length;
        images[currentImageIndex].classList.remove('hidden');
      });
    </script>
  </body>
</html>
