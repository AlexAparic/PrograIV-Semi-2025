const matricula = {
    props: ['forms'],
    data() {
        return {
            accion: 'nuevo',
            idLibro: '',
            alumnoSeleccionado: null,
            fecha: '',
            periodo: '',
            edicion: '',
            alumnos: [], // Lista de alumnos para seleccionar
            periodos: [
                { valor: 'Catalana', texto: 'Catalana' },
                { valor: 'Alfaguara', texto: 'Alfaguara' },
                { valor: 'Edicion Destino', texto: 'Edicion Destino' }
            ]
        };
    },
    methods: {
        buscarMatricula() {
            this.forms.buscarMatricula.mostrar = !this.forms.buscarMatricula.mostrar;
            this.$emit('buscar');
        },
        modificarMatricula(matricula) {
            this.accion = 'modificar';
            this.idLibro = matricula.idLibro;
            this.alumnoSeleccionado = matricula.alumnoSeleccionado;
            this.fecha = matricula.fecha;
            this.periodo = matricula.periodo;
            this.edicion = matricula.edicion;
        },
        validarFormulario() {
            if (!this.alumnoSeleccionado) {
                alertify.error('Debe seleccionar un libro.');
                return false;
            }
            if (!this.fecha) {
                alertify.error('Debe ingresar una fecha.');
                return false;
            }
            if (!this.periodo) {
                alertify.error('Debe seleccionar una editorial.');
                return false;
            }
            if (!this.edicion) {
                alertify.error('Debe ingresar una edicion.');
                return false;
            }
            return true;
        },
        guardarMatricula() {
            if (!this.validarFormulario()) return;

            let nuevaMatricula = {
                alumnoSeleccionado: this.alumnoSeleccionado,
                fecha: this.fecha,
                edicion: this.edicion,
                periodo: this.periodo

            };

            db.matriculas.where({ alumnoSeleccionado: this.alumnoSeleccionado, periodo: this.periodo }).count().then(count => {
                if (count > 0 && this.accion === 'nuevo') {
                    alertify.error('El libro ya esta registrado.');
                    return;
                }

                if (this.accion === 'modificar') {
                    nuevaMatricula.idMatricula = this.idMatricula;
                }

                db.matriculas.put(nuevaMatricula).then(() => {
                    alertify.success('Libro guardado correctamente.');
                    this.nuevaMatricula();
                    this.cargarAlumnos();  // Recargar la lista de alumnos al guardar la matrícula
                });
            });
        },
        nuevaMatricula() {
            this.accion = 'nuevo';
            this.idLibro = '';
            this.alumnoSeleccionado = null;
            this.fecha = '';
            this.edicion = '';
            this.periodo = '';
        },
        cargarAlumnos() {
            db.alumnos.toArray().then(alumnos => {
                this.alumnos = alumnos;
            });
        }
    },
    mounted() {
        this.cargarAlumnos();  // Cargar la lista de alumnos al montar el componente

        // Detectar cambios en la base de datos en tiempo real
        db.alumnos.hook('creating', () => this.cargarAlumnos());  // Cargar los alumnos cuando se cree uno nuevo
        db.alumnos.hook('updating', () => this.cargarAlumnos());  // Recargar si se actualiza algún alumno
        db.alumnos.hook('deleting', () => this.cargarAlumnos());  // Recargar si se elimina algún alumno
    },
    template: `
        <div class="row">
            <div class="col-6">
                <form id="frmMatricula" name="frmMatricula" @submit.prevent="guardarMatricula">
                    <div class="card border-dark mb-3">
                        <div class="card-header bg-dark text-white">Libros</div>
                        <div class="card-body">
                            <div class="row p-1">
                                <div class="col-3 col-md-2">Autores</div>
                                <div class="col-9 col-md-6">
                                    <select v-model="alumnoSeleccionado" class="form-control" required>
                                        <option v-for="alumno in alumnos" :key="alumno.idAlumno" :value="alumno.idAlumno">
                                            {{ alumno.nombre }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row p-1">
                                <div class="col-3 col-md-2">Codigo</div>
                                <div class="col-9 col-md-4">
                                    <input v-model="fecha" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row p-1">
                                <div class="col-3 col-md-2">Editorial</div>
                                <div class="col-9 col-md-4">
                                    <select v-model="periodo" class="form-control" required>
                                        <option v-for="periodo in periodos" :key="periodo.valor" :value="periodo.valor">
                                            {{ periodo.texto }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                             <div class="row p-1">
                                <div class="col-3 col-md-2">Edicion</div>
                                <div class="col-9 col-md-4">
                                    <input v-model="edicion" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark text-center">
                            <input type="submit" value="Guardar" class="btn btn-primary"> 
                            <input type="reset" value="Nuevo" class="btn btn-warning">
                            <input type="button" @click="buscarMatricula" value="Buscar" class="btn btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    `
};
