@extends('layouts.app')

@section('content')
    <div class="mt-3 px-5">
        <div class="p-5 shadow">
            <h3 class="text-center mb-4">Registro de productos</h3>
            <div class="col-md-10 mx-auto p-3">
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example1" class="form-control" />
                                <label class="form-label" for="form6Example1">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example2" class="form-control" />
                                <label class="form-label" for="form6Example2">Last name</label>
                            </div>
                        </div>
                    </div>

                    <!-- Text input -->
                    <div class="row mb-2">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example3" class="form-control" />
                                <label class="form-label" for="form6Example3">Company name</label>
                            </div>
                        </div>
                        <div class="col" style="display: flex; justify-content: space-around;">
                            <div class="form-outline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-outline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-2">
                        <input type="text" id="form6Example4" class="form-control" />
                        <label class="form-label" for="form6Example4">Address</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-2">
                        <input type="email" id="form6Example5" class="form-control" />
                        <label class="form-label" for="form6Example5">Email</label>
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-2">
                        <input type="number" id="form6Example6" class="form-control" />
                        <label class="form-label" for="form6Example6">Phone</label>
                    </div>

                    <!-- Options -->
                    <div class="form-outline mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label class="form-label" for="form6Example3">Departamento</label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-2">
                        <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                        <label class="form-label" for="form6Example7">Additional information</label>
                    </div>
                    <div style="display: flex; justify-content: space-between">
                         <!-- Submit button -->
                         <a type="button" class="btn btn-block mb-4" style="background-color: #F32424; color: white"
                         href="{{ route('product.index') }}">
                            <i class="fa-solid fa-backward"></i>
                            Atras
                         </a>
                        <button type="submit" class="btn btn-block mb-4" style="background-color: #9772FB; color: white">
                            <i class="fa-solid fa-floppy-disk"></i>
                            Agregar Producto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
