<template>
      <main>
        <section>
            <div class="container">

                <h1 class="display-6 text-muted">Proveedores</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre Proveedor</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Correo">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Numero de Telefono</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Telefono">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Direccion">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Obciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Esperanza lozano</td>
                            <td>esperanza28@gmail.com</td>
                            <td>317 1563251</td>
                            <td>Bogota carrera 66</td>
                            <td style="width: 180px;">
                                <button type="button" class="btn btn-success">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Diego calderon</td>
                            <td>diegoraza@gmail.com</td>
                            <td>317 4563125</td>
                            <td>Tunja calle 26</td>
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