@include('header')

<div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-16">
  <div class="px-4 py-2">
      <h1 class="text-gray-800 font-bold text-2xl uppercase">To-Do List</h1>
  </div>
  <form class="w-full max-w-sm mx-auto px-4 py-2">
      <div class="flex items-center border-b-2 border-teal-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="date" placeholder="Start Date">
      </div>
      <span class="text-sm text-gray-400">Select the date when prayers became obligatory.</span>

      <div class="flex items-center border-b-2 border-teal-500 py-3">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="date" placeholder="End Date">
    </div>
    <span class="text-sm text-gray-400">Select the date until which you want to calculate prayers.</span>
  </form>

  <hr class="border-t border-gray-300 my-2">

  <ul class="divide-y divide-gray-200 px-4">
    <li class="py-4">
        <div class="flex items-center">
            <input id="todo1" name="todo1" type="checkbox"
                class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded">
            <label for="todo1" class="ml-3 block text-gray-900">
                <span class="text-lg font-medium">Finish project proposal</span>
                <span class="text-sm font-light text-gray-500">Due on 4/1/23</span>
            </label>
        </div>
    </li>
      <li class="py-4">
          <div class="flex items-center">
              <input id="todo2" name="todo2" type="checkbox"
                  class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded">
              <label for="todo2" class="ml-3 block text-gray-900">
                  <span class="text-lg font-medium">Buy groceries</span>
                  <span class="text-sm font-light text-gray-500">Bananas, milk, bread</span>
              </label>
          </div>
      </li>
      <li class="py-4">
          <div class="flex items-center">
              <input id="todo3" name="todo3" type="checkbox"
                  class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300 rounded">
              <label for="todo3" class="ml-3 block text-gray-900">
                  <span class="text-lg font-medium">Go for a run</span>
                  <span class="text-sm font-light text-gray-500">3 miles</span>
              </label>
          </div>
      </li>
  </ul>
</div>