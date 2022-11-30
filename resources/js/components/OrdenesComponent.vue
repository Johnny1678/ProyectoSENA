<template>
      <main>
        <section>
            <div class="container">

                <h1 class="display-6 text-muted">Ordenes</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">Nueva orden</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Fecha de la orden</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Fecha orden">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Fecha del envio</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Fecha envio">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre Ciudad</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Nombre Ciudad">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre Departamento</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Correo">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Valor total de la
                                        orden</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Ciudad">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Productos</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Productos">
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
                            <th scope="col">Fecha Orden</th>
                            <th scope="col">Fecha envio</th>
                            <th scope="col">Nombre Ciudad</th>
                            <th scope="col">Nombre Departamento</th>
                            <th scope="col">Valor total orden</th>
                            <th scope="col">cliente</th>
                            <th scope="col">Productos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>25/10/2022</td>
                            <td>28/10/2022</td>
                            <td>Santander</td>
                            <td>Bucaramanga</td>
                            <td>150.000</td>
                            <td>Juan carlos</td>
                            <td>Matera 15</td>
                            <td style="width: 180px;">
                                <button type="button" class="btn btn-success">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>26/10/2022</td>
                            <td>28/10/2022</td>
                            <td>Medellin</td>
                            <td>Antioquia</td>
                            <td>200.000</td>
                            <td>Andres ochoa</td>
                            <td>Matera 18</td>
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