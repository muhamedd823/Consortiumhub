<?php include 'header.php'; ?>

    <!-- Main content area -->
    <!-- Added min-w-0 to allow this flex item to shrink correctly -->
    <div class="flex flex-col flex-1 min-w-0">
        <!-- Header -->
        <header class="flex items-center justify-between h-20 px-8 bg-white border-b border-gray-200 shadow-sm rounded-bl-xl">
            <div class="flex items-center">
                <!-- Hamburger menu for small screens -->
                <button id="sidebarToggleBtn"
                    class="text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary-500 rounded-md p-2 lg:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
                <h2 id="mainContentTitle" class="ml-4 text-2xl font-semibold text-gray-800">Upload Project Reports</h2>
            </div>
            <div class="flex items-center space-x-4">
                <!-- Notification bell -->
                <button class="relative p-2 text-gray-500 hover:text-primary-600 rounded-full focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <span class="absolute top-0 right-0 flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-primary-600"></span>
                    </span>
                </button>
                
                <!-- Help button -->
                <button class="p-2 text-gray-500 hover:text-primary-600 rounded-full focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 极速4 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </button>
            </div>
        </header>

        <!-- Content Area -->
        <main id="mainContentArea" class="flex-1 p-8 overflow-y-auto overflow-x-auto bg-gray-50">
            <div id="uploadReportSection" class="bg-white p-8 rounded-xl shadow-lg max-w-3xl mx-auto animate-fadeIn card-hover">
                <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Upload New Report Document</h3>
                <p class="text-gray-500 text-center mb-8">Submit your project reports for review and archival</p>
                
                <form id="uploadForm" class="space-y-6">
                    <div>
                        <label for="documentNameSelect" class="block text-gray-700 text-sm font-semibold mb-2">
                            Document Name:
                        </label>
                        <select id="documentNameSelect"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-200 shadow-sm">
                            <option value="Financial Report">Financial Report</option>
                            <option value="Progress Report">Progress Report</option>
                          
                            <option value="Other">Other (specify below)</option>
                        </select>
                    </div>
                    
                    <div id="customDocumentNameContainer" class="hidden">
                        <label for="customDocumentNameInput" class="block text-gray-700 text-sm font-semibold mb-2">
                            Custom Document Name:
                        </label>
                        <input type="text" id="customDocumentNameInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-200 shadow-sm"
                            placeholder="e.g., Q3 Financial Report 2025">
                    </div>

                    <div>
                        <label for="reportFile" class="block text-gray-700 text-sm font-semibold mb-2">
                            Select Report File:
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <!-- Added ID to label for drag-and-drop targeting -->
                            <label for="reportFile" id="dropZoneLabel" class="flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-primary-400 hover:bg-primary-50 transition duration-200">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 极速a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3极速3-3v12"></path>
                                    </svg>
                                    <p class="mb极速 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500">PDF, DOCX, XLSX (Max. 10MB)</p>
                                </div>
                                <input id="reportFile" type="file" class="hidden" required>
                            </label>
                        </div> 
                        <p id="selectedFileName"极速mt-2 text-sm text-primary-600 font-medium hidden"></p>
                    </div>
                    
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-primary-600 to-primary-700 text-white py-3 px-6 rounded-lg hover:from-primary-700 hover:to-primary-800 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all duration-300 shadow-md hover:shadow-lg font-medium">
                        Upload Document
                    </button>
                </form>
            </div>
        </main>
    </div>

    <!-- Rest of your HTML (Floating Action Button, Message Panel, Custom Message Box) -->
    
    <script>
        // Your JavaScript code here
    </script>
</body>
</html>