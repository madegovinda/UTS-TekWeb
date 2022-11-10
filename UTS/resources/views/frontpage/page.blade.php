<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <header class="border-b md:flex md:items-center md:justify-between p-4 pb-0 shadow-lg md:pb-4">
  

  <div class="flex items-center justify-between mb-4 md:mb-0">
    <h1 class="leading-none text-2xl text-grey-darkest">
      <a class="no-underline text-grey-darkest hover:text-black" href="#">
        Home
      </a>
    </h1>
    <a class="text-black hover:text-orange md:hidden" href="#">
      <i class="fa fa-2x fa-bars"></i>
    </a>
  </div>
  <nav>
    <ul class="list-reset md:flex md:items-center">
      <li class="md:ml-4">
        <a class="block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="#">
          Promo
        </a>
      </li>
      <li class="md:ml-4">
        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="#">
          Cart
        </a>
      </li>
      <li class="md:ml-4">
        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="#">
          Profile
        </a>
      </li>
    </ul>
  </nav>
  <!-- END Global navigation -->

</header>
    <div class="flex justify-around">
      <div class="w-[500px]">
        <div class="flex items-center justify-center p-12">
          <div class="mx-auto w-full max-w-[1000px]">
            <form action="#" method="POST">
              <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                  <div class="mb-5">
                <label
                  for="guest"
                  class="mb-3 block text-base font-medium text-[#07074D]">
                  Mr/Mrs
                </label>
                <select
                  type="number"
                  name="guest"
                  id="guest"
                  placeholder="Mr/Mrs"
                  min="0"
                  class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                  <option value="mr">Mr</option>
                  <option value="mrs">Mrs</option>
                  </select>
                </div>
              
                </div>
              </div>
                <div class="mb-5">
                <label
                  for="nama"
                  class="mb-3 block text-base font-medium text-[#07074D]">
                  Nama Pemesan
                </label>
                <input
                  type="text"
                  name="nama"
                  id="nama"
                  placeholder="Nama"
                  min="0"
                  class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>

              <div class="mb-5">
                <label
                  for="nik"
                  class="mb-3 block text-base font-medium text-[#07074D]">
                  NIK
                </label>
                <input
                  type="text"
                  name="nik"
                  id="nik"
                  placeholder="Masukkan NIK"
                  min="0"
                  class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>
              <div class="mb-5">
                <label
                  for="alamat"
                  class="mb-3 block text-base font-medium text-[#07074D]">
                  Alamat
                </label>
                <input
                  type="text"
                  name="alamat"
                  id="alaamat"
                  placeholder=""
                  min="0"
                  class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>

              <div>
                <div class="text-3xl py-10">Guest</div>
                <div class="mb-5">
                    <label
                      for="fName"
                      class="mb-3 block text-base font-medium text-[#07074D]">
                      Mr/Ms
                    </label>
                    <input
                      type="text"
                      name="fName"
                      id="fName"
                      placeholder="Mr/Ms"
                      class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                </div>
                <div class="mb-5">
                <label
                  for="nama"
                  class="mb-3 block text-base font-medium text-[#07074D]">
                  Nama Pemesan
                </label>
                <input
                  type="text"
                  name="nama"
                  id="nama"
                  placeholder="Nama"
                  min="0"
                  class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>

              <div class="mb-5">
                <label
                  for="nik"
                  class="mb-3 block text-base font-medium text-[#07074D]">
                  NIK
                </label>
                <input
                  type="text"
                  name="nik"
                  id="nik"
                  placeholder="Masukkan NIK"
                  min="0"
                  class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>
              <div class="mb-5">
                <label
                  for="alamat"
                  class="mb-3 block text-base font-medium text-[#07074D]">
                  Alamat
                </label>
                <input
                  type="text"
                  name="alamat"
                  id="alaamat"
                  placeholder=""
                  min="0"
                  class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
              </div>
              

              <div class="mb-5">
                <label class="mb-3 block text-base font-medium text-[#07074D]">
                  Tambahan
                </label>
                <div class="flex items-center space-x-6">
                  <div class="flex items-center">
                    <input
                      type="checkbox"
                      name="checkbox1"
                      id="checkboxButton1"
                      class="h-5 w-5" />
                    <label
                      for="checkboxButton1"
                      class="pl-3 text-base font-medium text-[#07074D]">
                      Asuransi
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input
                      type="checkbox"
                      name="checkbox1"
                      id="checkboxButton2"
                      class="h-5 w-5" />
                    <label
                      for="checkboxButton2"
                      class="pl-3 text-base font-medium text-[#07074D]">
                      Breakfast
                    </label>
                  </div>
                </div>
              </div>

              <div>
                <button
                  class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                  Submit
                </button>
              </div>
              </div>
            </form>
          </div>
        </div>
        <div class="w-[500px] border-8">
            <div class="flex items-center justify-center p-12">
              <div class="mx-auto w-full max-w-[1000px]">
                <form action="#" method="POST">
                  <div class="-mx-3 flex flex-wrap">
                  </div>
                  <div>
                    <div class="text-sm py-1">Nama Pemesan : Govin</div>
                    <div class="text-3xl py-1">Guest</div>
                    <hr>
                    <div class="my-5">
                        <div class="text-xl py-1">Mr. Guest 1</div>
                        <div class="text-sm py-1">Male, Asuransi</div>
                      </div>
                    <div class="my-5">
                        <div class="text-xl py-1">Mr. Guest 2</div>
                        <div class="text-sm py-1">Male, Alergi ikan laut</div>
                      </div>
                      <div>
                        <button
                          class="mt-10 hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                          Submit
                        </button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
      </div>
    </div>
  </body>
</html>