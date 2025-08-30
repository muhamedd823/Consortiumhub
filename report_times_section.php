<?php include 'header.php'; ?>

<div id="reportTimesSection" class="bg-white p-8 rounded-xl shadow-lg max-w-3xl mx-auto hidden animate-fadeIn card-hover">
    <h3 class="text-2xl font-bold text-gray-800 mb-2 text-center">Report Deadlines</h3>
    <p class="text-gray-500 text-center mb-8">Stay on track with upcoming reporting requirements</p>
    
    <div class="space-y-4">
        <div class="border border-gray-200 p-5 rounded-lg hover:border-primary-300 transition duration-200">
            <div class="flex justify-between items-start">
                <div>
                    <p class="font-semibold text-gray-800">Q3 Progress Report:</p>
                    <p class="text-gray-600 mt-1">Due: October 15, 2025</p>
                </div>
                <span class="px-3 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">Pending</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mt-3">
                <div class="bg-primary-600 h-2 rounded-full" style="width: 45%"></div>
            </div>
           
        </div>
        
        <div class="border border-gray-200 p-5 rounded-lg hover:border-primary-300 transition duration-200">
            <div class="flex justify-between items-start">
                <div>
                    <p class="font-semibold text-gray-800">Annual Impact Assessment:</p>
                    <p class="text-gray-600 mt-1">Due: December 31, 2025</p>
                </div>
                <span class="px-3 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">Upcoming</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mt-3">
                <div class="bg-primary-600 h-2 rounded-full" style="width: 10%"></div>
            </div>
           
        </div>
        
        <div class="border border-gray-200 p-5 rounded-lg hover:border-primary-300 transition duration-200">
            <div class="flex justify-between items-start">
                <div>
                    <p class="font-semibold text-gray-800">Monthly Activity Update (August):</p>
                    <p class="text-gray-600 mt-1">Due: August 30, 2025</p>
                </div>
                <span class="px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Overdue</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mt-3">
                <div class="bg-primary-600 h-2 rounded-full" style="width: 75%"></div>
            </div>
           
        </div>
        
        <div class="bg-primary-50 border border-primary-200 p-4 rounded-lg mt-6">
            <p class="text-sm text-primary-800 text-center">
                <span class="font-medium">Note:</span> This sectionshows report times.
            </p>
        </div>
    </div>
</div>