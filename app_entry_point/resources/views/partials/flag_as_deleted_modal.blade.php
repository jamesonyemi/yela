@php
$action_url;
$params;
@endphp
<!-- Modal1 -->
<div
id="my-modal"
x-cloak
class="fixed inset-0 z-20 w-full h-full overflow-y-auto duration-300 bg-black bg-opacity-50"
x-show="showModal1"
x-transition:enter="transition duration-300"
x-transition:enter-start="opacity-0"
x-transition:enter-end="opacity-100"
x-transition:leave="transition duration-300"
x-transition:leave-start="opacity-100"
x-transition:leave-end="opacity-0"
>
<div class="relative mx-2 my-10 opacity-100 sm:w-3/4 md:w-1/2 lg:w-1/3 sm:mx-auto center-modal sm-center-modal">
<div
class="relative z-20 text-gray-900 bg-white rounded-md shadow-lg"
@click.away="showModal1 = false"
x-show="showModal1"
x-transition:enter="transition transform duration-300"
x-transition:enter-start="scale-0"
x-transition:enter-end="scale-100"
x-transition:leave="transition transform duration-300"
x-transition:leave-start="scale-100"
x-transition:leave-end="scale-0"
>
<header class="flex items-center justify-between p-2">
<div class="my-3 mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
      <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
          <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
          </svg>
        </div>
    <h3 class="my-3 text-lg font-medium leading-6 text-gray-900" id="modal-headline">
      Deactivate account
    </h3>
    <div class="mt-2">
      <p class="text-sm text-gray-500">
        Are you sure you want to deactivate your account?
    </p>
    <div class="-mt-3">
        <span class="text-sm text-gray-500">
            Your data will be permanently removed. This action cannot be undone.
        </span>
    </div>
    </div>
  </div>
</header>

<footer class="flex flex-row-reverse justify-center p-2">
    <form id="delete-form" method="POST"  >
        @csrf
        @method("DELETE")

        <button type=submit"
        class="w-32 p-2 ml-3 font-semibold text-white transition-all duration-300 bg-red-600 rounded-full shadow-lg hover:bg-red-700 focus:outline-none focus:ring hover:shadow-none"
        @click="showModal1 = false"
        >
        Delete
        </button>
        <button class="w-32 p-2 text-base font-medium font-semibold text-gray-700 transition-all duration-300 bg-white border border-gray-300 rounded-full shadow-lg bg-white-600 hover:bg-red-700 focus:outline-none focus:ring hover:shadow-none hover:bg-gray-50 " @click="showModal1 = false" type="button" >
        Cancel
        </button>

    </form>
</footer>
</div>
</div>
</div>
