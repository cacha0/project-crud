@extends('layouts.master')
@section('content')
<!-- BEGIN: Form Layout -->
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            Form Add Data Companies
                        </h2>
                    </div>
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="intro-y col-span-12 lg:col-span-6">
                                <div class="intro-y box p-5">
                                <form action="{{ route('companies.simpan') }}" method="post">
                                    @csrf
                                    <div>
                                        <label for="crud-form-1" class="form-label">Name</label>
                                        <input id="crud-form-1" type="text" name="name" class="form-control w-full" placeholder="Input name">
                                    </div>
                                    <div>
                                        <label for="crud-form-1" class="form-label">Address</label>
                                        <input id="crud-form-1" type="text" name="address" class="form-control w-full" placeholder="Input Address">
                                    </div>
                                    <div class="text-right mt-5">
                                        <button class="btn btn-primary w-24" type="submit">Submit</button>
                                        <button class="btn btn-outline-secondary w-24 mr-1" type="cancel">Cancel</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </form>
<!-- END: Form Layout -->
@endsection