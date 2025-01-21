@extends('base')
@section('title', 'Partitio | Songs')
@section('container')
  <!-- Main Content -->
  <div class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Sheet Music Viewer Section -->
      <div class="w-full lg:w-[70%] space-y-4">
        <!-- Playback Controls -->
        <div class="sticky top-0 z-10 bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
              <button class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                <i data-lucide="play" class="h-6 w-6"></i>
              </button>
              <button class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                <i data-lucide="pause" class="h-6 w-6"></i>
              </button>
              <button class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                <i data-lucide="rotate-ccw" class="h-6 w-6"></i>
              </button>
              <div class="h-8 w-px bg-gray-200 dark:bg-gray-700"></div>
              <button class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                <i data-lucide="zoom-in" class="h-6 w-6"></i>
              </button>
              <button class="p-2 text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                <i data-lucide="zoom-out" class="h-6 w-6"></i>
              </button>
            </div>
            <button class="flex items-center space-x-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
              <i data-lucide="download" class="h-5 w-5"></i>
              <span>Download</span>
            </button>
          </div>
          <!-- Progress Bar -->
          <div class="mt-4">
            <div class="relative pt-1">
              <div class="flex mb-2 items-center justify-between">
                <div>
                  <span class="text-xs font-semibold inline-block text-blue-600">
                    0:00
                  </span>
                </div>
                <div class="text-right">
                  <span class="text-xs font-semibold inline-block text-blue-600">
                    3:45
                  </span>
                </div>
              </div>
              <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                <div class="w-1/3 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- PDF Viewer -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
          <div id="pdf-viewer" class="w-full h-[800px] overflow-auto">
            <!-- PDF will be rendered here -->
            <canvas id="pdf-canvas" class="mx-auto"></canvas>
          </div>
        </div>
      </div>

      <!-- Information Section -->
      <div class="w-full lg:w-[30%] space-y-6">
        <!-- Sheet Music Info -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
          <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Moonlight Sonata</h1>
          <p class="text-gray-600 dark:text-gray-400 mb-4">
            Composed by Ludwig van Beethoven
          </p>
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm">
              Classical
            </span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm">
              Piano
            </span>
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm">
              Sonata
            </span>
          </div>
          <p class="text-gray-700 dark:text-gray-300 mb-6">
            The Piano Sonata No. 14 "Quasi una fantasia" in C-sharp minor, Op. 27, No. 2, popularly known as the Moonlight Sonata.
          </p>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <img src="https://picsum.photos/32/32" alt="Author" class="h-8 w-8 rounded-full">
              <div>
                <p class="text-sm font-medium text-gray-900 dark:text-white">Shared by John Doe</p>
                <p class="text-xs text-gray-500">2 days ago</p>
              </div>
            </div>
            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
              Follow
            </button>
          </div>
        </div>

        <!-- Statistics -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
          <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Statistics</h2>
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <span class="text-gray-600 dark:text-gray-400">Views</span>
              <span class="text-gray-900 dark:text-white font-medium">1,234</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-600 dark:text-gray-400">Downloads</span>
              <span class="text-gray-900 dark:text-white font-medium">567</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-600 dark:text-gray-400">Likes</span>
              <span class="text-gray-900 dark:text-white font-medium">89</span>
            </div>
          </div>
        </div>

        <!-- Similar Sheet Music -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
          <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Similar Sheet Music</h2>
          <div class="space-y-4">
            <a href="#" class="block hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg p-2">
              <div class="flex items-center space-x-3">
                <div class="h-12 w-12 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                  <i data-lucide="file-music" class="h-6 w-6 text-blue-600"></i>
                </div>
                <div>
                  <p class="text-sm font-medium text-gray-900 dark:text-white">Für Elise</p>
                  <p class="text-xs text-gray-500">Ludwig van Beethoven</p>
                </div>
              </div>
            </a>
            <!-- More similar sheet music... -->
          </div>
        </div>
      </div>
    </div>
  </div>

 
@endsection
@section('scripts')
<script>

    // PDF.js initialization
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';

    // Example PDF loading (replace with actual PDF URL)
    const pdfUrl = 'https://example.com/moonlight-sonata.pdf';
    const canvas = document.getElementById('pdf-canvas');
    const context = canvas.getContext('2d');

    // Load and render PDF
    pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
      // Get first page
      return pdf.getPage(1);
    }).then(function(page) {
      const viewport = page.getViewport({ scale: 1.5 });
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      const renderContext = {
        canvasContext: context,
        viewport: viewport
      };

      return page.render(renderContext).promise;
    }).catch(function(error) {
      console.error('Error loading PDF:', error);
    });
  </script>
@endsection