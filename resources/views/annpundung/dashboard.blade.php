   <!-- Main Content -->
   <div class="flex-1 ml-0 lg:ml-64  lg:p-8 transition-all duration-300">
   
   <div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
     <div>
      <h1 class="text-2xl font-bold">
       Selamat datang, Sigma Team
      </h1>
      <p class="text-gray-600">
       Berikut adalah grafik Laporan
      </p>
     </div>
     <div class="flex items-center">
      <i class="fas fa-user-circle text-2xl mr-2">
      </i>
      <span>
       Sigma Team
      </span>
     </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
     <div class="bg-green-100 p-4 rounded-lg">
      <h2 class="text-xl font-bold">
       Total Pelaporan
      </h2>
      <p class="text-3xl font-bold">
        70
      </p>
      <p class="text-green-600">
       +18%
       <span class="text-gray-600">
        Minggu ini
       </span>
      </p>
     </div>
     <div class="bg-yellow-100 p-4 rounded-lg">
      <h2 class="text-xl font-bold">
       Pengunjung
      </h2>
      <p class="text-3xl font-bold">
       132
      </p>
      <p class="text-green-600">
       +15%
       <span class="text-gray-600">
          Minggu ini
       </span>
      </p>
     </div>
     <div class="bg-blue-100 p-4 rounded-lg">
      <h2 class="text-xl font-bold">
       Laporan Hari Ini
      </h2>
      <p class="text-3xl font-bold">
       17
      </p>
      <p class="text-red-400">
        -7%
        <span class="text-gray-600">
           Minggu ini
        </span>
     </div>
    </div>
    <div class="w-92 bg-white p-8 rounded-lg shadow-md">
        <div class=" d-flex align-items-strech">
          <div class="">
            <div class="card-body">
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                <div class="mb-3 mb-sm-0">
                  <h5 class="card-title fw-semibold">Kunjungan</h5>
                </div>
                
              </div>
              <canvas class="" id="myChart1"></canvas >
            </div>
          </div>
          </div>
        </div>
      </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  const ctx = document.getElementById('myChart1');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['2020', '2021', '2022', '2023', '2024', '2025'],
      datasets: [{
        label: 'Kunjungan',
        data: [1432, 1900, 2130, 2230 , 2320, 100],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

  
<script>
  function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      const mainContent = document.querySelector('.flex-1');
      const menuButton = document.getElementById('menuButton');

      sidebar.classList.toggle('left-[-300px]');
      mainContent.classList.toggle('ml-0');
      mainContent.classList.toggle('ml-64');

      menuButton.classList.toggle('hidden');
  }
</script>
 </body>
</html>
