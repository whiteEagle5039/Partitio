@extends('base')
@section('title', 'Partitio | Create Community')
@section('container')
    <!-- Create Community Form -->
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Create New Community</h1>
        
        <form id="createCommunityForm" class="space-y-6">
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
              Community Name *
            </label>
            <input type="text" required
                   class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                          bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
          </div>
          
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
              Description (max 300 characters)
            </label>
            <textarea maxlength="300" rows="3"
                      class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                             bg-white dark:bg-gray-800 text-gray-900 dark:text-white"></textarea>
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-400">
              <span id="charCount">0</span>/300 characters
            </div>
          </div>
          
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
              Category
            </label>
            <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                          bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
              <option>Piano</option>
              <option>Guitar</option>
              <option>Orchestra</option>
              <option>Other</option>
            </select>
          </div>
          
          <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
              Community Icon
            </label>
            <div class="flex items-center space-x-4">
              <div id="imagePreview" class="h-32 w-32 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                <i data-lucide="image" class="h-8 w-8 text-gray-400"></i>
              </div>
              <div class="space-y-2">
                <input type="file" id="iconUpload" accept="image/*" class="hidden">
                <button type="button" onclick="document.getElementById('iconUpload').click()"
                        class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg">
                  Upload Image
                </button>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                  Recommended size: 256x256px
                </p>
              </div>
            </div>
          </div>
          
          <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-4">
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Creation Fee</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Required to create a new community</p>
              </div>
              <span class="text-lg font-bold text-gray-900 dark:text-white">100 coins</span>
            </div>
          </div>
          
          <div class="flex justify-end space-x-4">
            <a href="/communities.html"
               class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg">
              Cancel
            </a>
            <button type="submit"
                    class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
              Create Community
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Success Modal -->
  <div id="successModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-md w-full mx-4 p-6">
      <div class="text-center">
        <div class="mb-4 flex justify-center">
          <div class="h-12 w-12 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center">
            <i data-lucide="check" class="h-6 w-6 text-green-600 dark:text-green-300"></i>
          </div>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Community Created!</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-6">
          Your community has been created successfully. You can now start inviting members and creating content.
        </p>
        <div class="flex justify-center space-x-4">
          <a href="/community-chat.html" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Go to Community
          </a>
          <a href="/communities.html" class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg">
            Back to Communities
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Character counter for description
        const textarea = document.querySelector('textarea');
        const charCount = document.getElementById('charCount');
        
        textarea.addEventListener('input', function() {
        charCount.textContent = this.value.length;
        });

        // Image preview
        const iconUpload = document.getElementById('iconUpload');
        const imagePreview = document.getElementById('imagePreview');

        iconUpload.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
            imagePreview.innerHTML = `<img src="${e.target.result}" class="h-32 w-32 object-cover rounded-lg">`;
            }
            reader.readAsDataURL(file);
        }
        });

        // Form submission
        document.getElementById('createCommunityForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show confirmation dialog
        if (confirm('Creating a community costs 100 coins. Do you want to continue?')) {
            // Show success modal
            document.getElementById('successModal').classList.remove('hidden');
        }
        });
    </script>
@endsection