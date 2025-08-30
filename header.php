<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consortium Hub - Professional Frontend</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom font import */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            /* Changed to allow vertical scrolling and hide horizontal overflow at the body level */
            overflow-y: auto; 
            overflow-x: hidden;
        }
        
        /* Custom animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideInRight {
            from { transform: translateX(20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out;
        }
        
        .animate-slideInRight {
            animation: slideInRight 0.3s ease-out;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #c5c5c5;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        
        /* Card hover effect */
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
  
    .financial-report-container {
        max-height: 80vh;
        overflow-y: auto;
    }
    
    @media (min-width: 1024px) {
        .financial-report-container {
            max-height: 75vh;
        }
    }
 .sidebar-fixed {
        flex-shrink: 0 !important;
        width: 16rem !important; /* Same as w-64 */
    }
    
    .main-content-flex {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
    }
    
    /* Prevent content from causing overflow */
    .content-container {
        max-width: 100%;
        overflow-x: hidden;
    }
    
    /* Fix for the encoding issues in your sidebar */
    #sidebar a {
        display: flex;
        align-items: center;
        width: 100%;
        padding: 0.75rem 1rem;
        color: rgb(219 234 254);
        border-radius: 0.5rem;
        transition: all 0.2s;
    }
    
    #sidebar a:hover {
        background-color: rgb(29 78 216);
    }
    </style>
</head>
<body class="flex h-screen bg-gray-50 font-inter">
<?php include 'sidebar.php'; ?>
<?php include 'message_system.php'; ?>