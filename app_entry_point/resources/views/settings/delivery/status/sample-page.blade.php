        <!--Main Content-->
		<div class="px-0 main-content app-content">
			<div class="mb-1 bg-white navbar navbar-expand-lg responsive-navbar navbar-dark d-md-none">
				<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
					<div class="ml-auto d-flex order-lg-2">
						<div class="main-header-fullscreen fullscreen-button">
							<a href="#" class="header-link">
								<i class="header-icons" data-eva="expand-outline"></i>
							</a>
						</div>

					</div>
				</div>
			</div>
			<!-- Mobile Header -->

			<!--Main Content Header-->
			<div class="p-4 main-content-header container-fluid">
				{{-- <div>
					<h6 class="main-content-title tx-18 mg-b-5 mg-t-7 text-primary"><i class="pr-2 fa fa-bar-chart" aria-hidden="true"></i>  Delivery Status</h6>
				</div> --}}
				{{-- <div class="btn-list">
					<a href="#" class="btn btn-rounded btn-primary"><i class="mr-2 fe fe-plus-circle"></i>Create New</a>
					<a href="#" class="btn btn-rounded btn-outline-primary dropdown-toggle" data-toggle="dropdown">
						<i class="mr-2 fe fe-download"></i>Download<span class="caret"></span>
					</a>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item" href="#"><i class="mr-2 fe fe-mail"></i>Email</a>
						<a class="dropdown-item" href="#"><i class="mr-2 fe fe-printer"></i>Print</a>
						<a class="dropdown-item" href="#"><i class="mr-2 fe fe-copy"></i>Copy</a>
						<a class="dropdown-item" href="#"><i class="mr-2 fe fe-edit"></i>Edit</a>
					</div>
				</div> --}}
			</div>
			<!--Main Content Header-->

			<!--Main Content Container-->
			<div class="container-fluid">
				<!-- Row -->
                @livewire('settings.delivery.segment')
                <div class="mt-4 mb-4"><hr></div>
                @livewire('settings.item-category.item-segment')
                <div class="mt-4 mb-4"><hr></div>
                @livewire('settings.industry.show-industry')
                <div class="mt-4 mb-4"><hr></div>
                @livewire('settings.currency.show-currency')
                <div class="mt-4 mb-4"><hr></div>
                @livewire('settings.charges-per-location.show-charges')
            </div>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                  <div class="flex flex-col flex-wrap items-center w-full mb-20 text-center">
                    <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Pitchfork Kickstarter Taxidermy</h1>
                    <p class="w-full leading-relaxed text-gray-500 lg:w-1/2">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
                  </div>
                  <div class="flex flex-wrap -m-4">
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                      <div class="p-6 border border-gray-200 rounded-lg">
                        <div class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                          </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">Shooting Stars</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                      </div>
                    </div>
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                      <div class="p-6 border border-gray-200 rounded-lg">
                        <div class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                          </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">The Catalyzer</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                      </div>
                    </div>
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                      <div class="p-6 border border-gray-200 rounded-lg">
                        <div class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                          </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">Neptune</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                      </div>
                    </div>
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                      <div class="p-6 border border-gray-200 rounded-lg">
                        <div class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                          </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">Melanchole</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                      </div>
                    </div>
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                      <div class="p-6 border border-gray-200 rounded-lg">
                        <div class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                          </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">Bunker</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                      </div>
                    </div>
                    <div class="p-4 xl:w-1/3 md:w-1/2">
                      <div class="p-6 border border-gray-200 rounded-lg">
                        <div class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-500 bg-indigo-100 rounded-full">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                          </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-medium text-gray-900 title-font">Ramona Falls</h2>
                        <p class="text-base leading-relaxed">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                      </div>
                    </div>
                  </div>
                  <button class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Button</button>
                </div>
              </section>
		</div>
        <!--Main Content-->




