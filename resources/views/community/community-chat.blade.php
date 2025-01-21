@extends('base')
@section('title', 'Partitio | Chat')
@section('container')
    <!-- Chat Interface -->
    <div class="h-[calc(100vh-4rem)] flex flex-col md:flex-row">
        <!-- Sidebar Toggle for Mobile -->
        <button id="sidebar-toggle" class="md:hidden fixed bottom-4 right-4 z-50 bg-blue-600 text-white p-3 rounded-full shadow-lg">
        <i data-lucide="sidebar" class="h-6 w-6"></i>
        </button>

        <!-- Communities List -->
        <div id="communities-sidebar" class="hidden md:block w-full md:w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 overflow-y-auto">
        <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">My Communities</h3>
            <div class="space-y-2">
            <!-- Community Items -->
            <button class="w-full text-left p-2 rounded-lg bg-blue-50 dark:bg-blue-900">
                <div class="flex items-center space-x-3">
                <div class="h-8 w-8 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                    <i data-lucide="music" class="h-4 w-4 text-blue-600 dark:text-blue-300"></i>
                </div>
                <span class="text-gray-900 dark:text-white">Classical Piano</span>
                </div>
            </button>
            <!-- More communities... -->
            </div>
        </div>
        </div>

        <!-- Channels List -->
        <div id="channels-sidebar" class="hidden md:block w-full md:w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 overflow-y-auto">
        <div class="p-4">
            <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Channels</h3>
            <button class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                <i data-lucide="plus" class="h-5 w-5"></i>
            </button>
            </div>
            <div class="space-y-1">
            <!-- Channel Items -->
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400 px-2 py-1">TEXT CHANNELS</div>
            <button class="w-full text-left p-2 rounded-lg bg-gray-100 dark:bg-gray-700">
                <div class="flex items-center space-x-3">
                <i data-lucide="hash" class="h-4 w-4 text-gray-500"></i>
                <span class="text-gray-900 dark:text-white">announcements</span>
                </div>
            </button>
            <!-- More channels... -->
            </div>
        </div>
        </div>

        <!-- Chat Area -->
        <div class="flex-1 flex flex-col bg-white dark:bg-gray-800 overflow-hidden">
        <!-- Chat Header -->
        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <span class="text-lg font-semibold text-gray-900 dark:text-white">#announcements</span>
                <span class="text-sm text-gray-500">Classical Piano</span>
            </div>
            <div class="flex items-center space-x-2">
                <button id="members-toggle" class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 md:hidden">
                <i data-lucide="users" class="h-5 w-5"></i>
                </button>
                <button class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                <i data-lucide="settings" class="h-5 w-5"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Messages Area -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4" id="messages-area">
            <!-- Messages will be dynamically added here -->
        </div>

        <!-- Message Input -->
        <div class="p-4 border-t border-gray-200 dark:border-gray-700">
            <div class="flex space-x-4">
            <button class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                <i data-lucide="plus-circle" class="h-5 w-5"></i>
            </button>
            <input type="text" placeholder="Type a message..."
                    class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                            bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
            <button class="p-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                <i data-lucide="smile" class="h-5 w-5"></i>
            </button>
            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                Send
            </button>
            </div>
        </div>
        </div>

        <!-- Members List -->
        <div id="members-sidebar" class="hidden md:block w-full md:w-64 bg-white dark:bg-gray-800 border-l border-gray-200 dark:border-gray-700 overflow-y-auto">
        <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Members</h3>
            <div class="space-y-4">
            <!-- Online Members -->
            <div>
                <h4 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Online - 3</h4>
                <div class="space-y-2">
                <!-- Member items -->
                </div>
            </div>
            <!-- Offline Members -->
            <div>
                <h4 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Offline - 2</h4>
                <div class="space-y-2">
                <!-- Member items -->
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
     // Sidebar toggles for mobile
     const sidebarToggle = document.getElementById('sidebar-toggle');
    const communitiesSidebar = document.getElementById('communities-sidebar');
    const channelsSidebar = document.getElementById('channels-sidebar');
    const membersSidebar = document.getElementById('members-sidebar');
    const membersToggle = document.getElementById('members-toggle');

    let currentSidebar = null;

    sidebarToggle.addEventListener('click', () => {
      if (currentSidebar === communitiesSidebar) {
        communitiesSidebar.classList.add('hidden');
        channelsSidebar.classList.remove('hidden');
        currentSidebar = channelsSidebar;
      } else if (currentSidebar === channelsSidebar) {
        channelsSidebar.classList.add('hidden');
        currentSidebar = null;
      } else {
        communitiesSidebar.classList.remove('hidden');
        channelsSidebar.classList.add('hidden');
        currentSidebar = communitiesSidebar;
      }
    });

    membersToggle.addEventListener('click', () => {
      membersSidebar.classList.toggle('hidden');
    });

    // Chat functionality
    const messageInput = document.querySelector('input[type="text"]');
    const sendButton = document.querySelector('button:contains("Send")');
    const messagesArea = document.getElementById('messages-area');

    // Sample messages for demonstration
    const sampleMessages = [
      {
        user: 'John Doe',
        avatar: 'https://picsum.photos/32/32',
        time: '2:30 PM',
        content: 'Welcome to the Classical Piano community! 🎹'
      },
      {
        type: 'system',
        content: 'Sarah joined the community'
      },
      {
        user: 'Sarah',
        avatar: 'https://picsum.photos/32/32?2',
        time: '2:35 PM',
        content: "Hi everyone! I'd love to share my latest piano piece:",
        attachment: {
          type: 'audio',
          name: 'Moonlight Sonata.mp3',
          size: '4.2 MB'
        }
      }
    ];

    // Add sample messages to the chat
    sampleMessages.forEach(message => {
      if (message.type === 'system') {
        messagesArea.innerHTML += `
          <div class="flex justify-center">
            <span class="text-sm text-gray-500 bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded-full">
              ${message.content}
            </span>
          </div>
        `;
      } else {
        let attachmentHtml = '';
        if (message.attachment) {
          attachmentHtml = `
            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg p-4 mt-2">
              <div class="flex items-center space-x-3">
                <i data-lucide="file-audio" class="h-8 w-8 text-blue-600"></i>
                <div>
                  <p class="text-sm font-medium text-gray-900 dark:text-white">${message.attachment.name}</p>
                  <p class="text-xs text-gray-500">${message.attachment.size}</p>
                </div>
                <button class="ml-auto p-2 text-blue-600 hover:text-blue-700">
                  <i data-lucide="download" class="h-5 w-5"></i>
                </button>
              </div>
            </div>
          `;
        }

        messagesArea.innerHTML += `
          <div class="flex space-x-3">
            <img src="${message.avatar}" alt="${message.user}" class="h-8 w-8 rounded-full">
            <div>
              <div class="flex items-center space-x-2">
                <span class="font-medium text-gray-900 dark:text-white">${message.user}</span>
                <span class="text-sm text-gray-500">${message.time}</span>
              </div>
              <p class="text-gray-700 dark:text-gray-300">${message.content}</p>
              ${attachmentHtml}
            </div>
          </div>
        `;
      }
    });

    // Send message functionality
    function sendMessage() {
      const message = messageInput.value.trim();
      if (message) {
        const timestamp = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        messagesArea.innerHTML += `
          <div class="flex space-x-3">
            <img src="https://github.com/shadcn.png" alt="You" class="h-8 w-8 rounded-full">
            <div>
              <div class="flex items-center space-x-2">
                <span class="font-medium text-gray-900 dark:text-white">You</span>
                <span class="text-sm text-gray-500">${timestamp}</span>
              </div>
              <p class="text-gray-700 dark:text-gray-300">${message}</p>
            </div>
          </div>
        `;
        messageInput.value = '';
        messagesArea.scrollTop = messagesArea.scrollHeight;
      }
    }

    // Event listeners for sending messages
    sendButton.addEventListener('click', sendMessage);
    messageInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        sendMessage();
      }
    });

    // Initialize Lucide icons again for dynamically added content
    lucide.createIcons();
  </script>
@endsection