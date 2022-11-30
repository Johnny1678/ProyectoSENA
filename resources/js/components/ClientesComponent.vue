<template>
    <main>
        <section>
            <div class="container">
                <h1 class="display-6 text-muted">Clientes</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre cliente</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Direccion">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Numero de Telefono</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Telefono">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Correo">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Ciudad">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Departamento</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Departamento">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefonon</th>
                            <th scope="col">Correo electronico</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Obciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Juan carlos</td>
                            <td>310 8541756</td>
                            <td>juan@gmail.com</td>
                            <td>Santander</td>
                            <td>Bucaramanga</td>
                            <td>calle 10# 45</td>
                            <td style="width: 180px;">
                                <button type="button" class="btn btn-success">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Andres ochoa</td>
                            <td>312 4568541</td>
                            <td>andres15@gmail.com</td>
                            <td>Antioquia</td>
                            <td>Medellin</td>
                            <td>calle#78 con avenida sur</td>
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