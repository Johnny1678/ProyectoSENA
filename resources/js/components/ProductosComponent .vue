<template>
      <main>
        <section>
            <div class="container">

                <h1 class="display-6 text-muted">Productos</h1>
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nuevo
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre Producto</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Producto">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Stock incial</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Stock">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Precio unidad</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Precio unidiad">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Categora</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Categoria">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Precio unidad</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Unidades en orden</th>
                            <th scope="col">Obciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Matera 15</td>
                            <td>250</td>
                            <td>6000</td>
                            <td>Bambu</td>
                            <td>45</td>
                            <td style="width: 180px;">
                                <button type="button" class="btn btn-success">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Matera 18</td>
                            <td>300</td>
                            <td>8000</td>
                            <td>Bambu</td>
                            <td>60</td>
                            <td style="width: 180px;">
                                <button type="button" class="btn btn-success">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Matera 22</td>
                            <td>200</td>
                            <td>12000</td>
                            <td>Bambu</td>
                            <td>50</td>
                            <td style="width: 180px;">
                                <button type="button" class="btn btn-success">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Matera 25</td>
                            <td>100</td>
                            <td>16000</td>
                            <td>Bambu</td>
                            <td>10</td>
                            <td style="width: 180px;">
                                <button type="button" class="btn btn-success">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex flex-row-reverse">
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </section>
    </main>
</template>
<script>

</script>