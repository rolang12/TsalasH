@extends('layouts.layout')

@section('content')

    <!--Card-->
    <div id='recipients' class="p-10 mt-36 lg:mt-0 rounded shadow bg-gray-200">
                    
        <table id="example" class="stripe hover p-4 " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">

            <thead>

                <tr class="bg-black p-3 text-white ">
                    
                    <th data-priority="1">ID</th>
                    <th class="text-left" data-priority="2">Nombre</th>
                    <th data-priority="3">Cédula</th>
                    <th class="text-left" data-priority="4">Teléfono</th>
                    <th class="text-left" data-priority="5">Email</th>
                    <th data-priority="6">View</th>
                    <th data-priority="7">Edit</th>
                    <th data-priority="8">Delete</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($users as $user)
                
                    <tr>

                        <td class="text-center  ">{{ $user->id }}</td>
                        <td class="text-left  ">{{ $user->name." ".$user->last_name }}</td>
                        <td class="text-left  ">{{ $user->document_id}}</td>
                        <td class="text-left  ">{{ $user->phone }}</td>
                        <td class="text-left  ">{{ $user->email }}</td>

                        <td class="text-center hover-text-green-600 text-green-300"><a
                            href="{{ route('user.user.show-user', Crypt::encrypt($user->id)) }}">
                            <button><i class="far fa-eye"></i></button>
                        </td>

                        <td class="text-center hover-text-blue-600 text-blue-300 "><a
                            href="{{ route('user.user.edit', Crypt::encrypt($user->id)) }}">
                            <button><i class="far  fa-edit"></i></button></a>
                        </td>

                        <td class="text-center hover-text-red-600 font-bold "><a
                            href="{{ route('user.user.destroy', Crypt::encrypt($user->id)) }}">
                            <button onclick=" return confirmDelete() "    ><i class="fas text-red-600 fa-trash"></i></button>
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

        
        function confirmDelete()
        {
            var respuesta = confirm("Are you sure that you want delete this post?");

            if (respuesta)
            {
                return true
            } else {

                return false
            }
        }



    </script>
    
@endsection
