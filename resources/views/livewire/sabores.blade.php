  @extends('layouts.layout')

  <div>

      @section('content')
          <livewire:messages.success-product />

          <!--Card-->
          <div id='recipients' class="p-10  mb-10 lg:mt-32 md:mt-8 rounded shadow">

              <table id="example" class="stripe hover p-4 w-full pt-4 pb-4"
                  style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                  <thead>
                      <tr class="  bg-black p-5 text-white ">

                          <th class="w-auto" data-priority="1" class="text-left">Id</th>
                          <th data-priority="2" class="text-left">Sabor</th>
                          <th data-priority="3" class="text-left">Estado</th>
                          <th data-priority="4" class="text-center">Editar</th>
                          <th>Eliminar</th>

                      </tr>
                  </thead>
                  <!--no se que opine de dejar el gris de fondo como en los otros?-->
                  <tbody></tbody>

                  @foreach ($sabors as $sabor)
                      <tr>

                          <td class="text-center  ">{{ $sabor->id }}</td>
                          <td class="text-left  ">{{ $sabor->sabor }}</td>
                          <td class="text-left  ">{{ $sabor->status }}</td>

                          <td class="text-center hover-text-blue-600 text-blue-300 "><a
                                  href="{{ route('sabors.sabores-edit', Crypt::encrypt($sabor->id)) }}">
                                  <button><i class="far fa-edit"></i></button></a>
                          </td>
                          <td class="text-center hover-text-red-600 font-bold "><a
                                  href="{{ route('sabors.sabores-destroy', Crypt::encrypt($sabor->id)) }}">
                                  <button onclick=" return confirmDelete() "><i
                                          class="fas text-red-600 fa-trash"></i></button>
                          </td>
                      </tr>
                  @endforeach

                  </tbody>

              </table>

          </div>

          <script>
              $(document).ready(function() {

                  var table = $('#example').DataTable({
                          responsive: true
                      })
                      .columns.adjust()
                      .responsive.recalc();
              });


              function confirmDelete() {
                  var respuesta = confirm("¿Estás seguro de que quieres eliminar este sabor?");

                  if (respuesta) {
                      return true
                  } else {

                      return false
                  }
              }
          </script>
      @endsection
  </div>
