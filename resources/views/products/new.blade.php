@extends('header.header')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card-header">
                        Nuevo producto
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                            <input 
                                type="submit" 
                                class="btn btn-primary float-right"
                                value="Agregar"
                            >
                            <a 
                                href="{{route('get_products')}}"
                                class="btn btn-danger float-right mr-1"
                            >Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@extends('footer.footer')