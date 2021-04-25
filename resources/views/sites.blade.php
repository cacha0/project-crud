@extends('layouts.master')
@section('content')
                <div class="content">
                    <h2 class="intro-y text-lg font-medium mt-10">
                        Sites Data List
                    </h2>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                            <a href="sites/tambahdatasites" class="btn btn-primary shadow-md mr-2">Add New Data</a>
                            <div class="dropdown">
                                <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="hidden md:block mx-auto text-gray-600">Showing ____ entries</div> -->
                            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                                    <input type="text" class="form-control w-56 box pr-10 placeholder-theme-8" placeholder="Search...">
                                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: Data List -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <table class="table table-report -mt-2">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">ID</th>
                                        <th class="text-center whitespace-nowrap">Name</th>
                                        <th class="text-center whitespace-nowrap">URL</th>
                                        <th class="text-center whitespace-nowrap">Company_id</th>
                                        <th class="text-center whitespace-nowrap">created_at</th>
                                        <th class="text-center whitespace-nowrap">updated_at</th>
                                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sites as $site)
                                    <tr class="intro-x">
                                            <td>{{ $site->id }}</td>
                                            <td>{{ $site->company->name }}</td>
                                            <td>{{ $site->url }}</td>
                                            <td>{{ $site->company_id }}</td>
                                            <td>{{ $site->created_at }}</td>
                                            <td>{{ $site->updated_at }}</td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                
                                                <form action="{{ url('sites/delete/'.$site->id) }}" method="post" class="d-inline" onsubmit="return confirm('Are You sure want to delete this data?')">
                                                    @method('delete')
                                                    @csrf 
                                                    <button class="btn btn-danger btn-sm">
                                                        Delete
                                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END: Data List -->
                        <!-- BEGIN: Pagination -->
                        
                        <!-- END: Pagination -->
                    
                    
@endsection