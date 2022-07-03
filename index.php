<?php require_once('partials/header.php'); ?>


<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Leave us A Feedback</h2>
    
    </div>
    <form class="mt-8 space-y-6" action="#" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
      <div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name: </label>
    <input type="text" id="name" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 ">
</div>
<div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email: </label>
    <input type="email" id="email" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
</div>
      

<div class="mt-18">    
<label for="feedback" class="block mt-6 text-sm font-medium text-gray-900 ">Feedback: </label>
<textarea id="feedback" rows="4" class="block mt-2 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Leave a comment..."></textarea>
</div>

      <div class="mt-12">
        <button type="submit" class="group  w-full flex justify-center mt-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-indigo-500">
          Submit
        </button>
      </div>
    </form>
  </div>
</div>


<?php require_once('partials/footer.php'); ?>