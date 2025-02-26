const {createApp, ref} = Vue;
const Dexie = window.Dexie,
    db = new Dexie('db_codigo_estudiantes');

    const app = createApp({
        components: {
            alumno,
            matricula,
            buscaralumno,
            buscarmatricula
            
        },
        data() {
            return {
                forms : {
                    alumno: {mostrar: false},
                    buscarAlumno: {mostrar: false},
                    matricula: {mostrar: false},
                    buscarMatricula: {mostrar: false},
                   
                },
            };
        },
        methods: {
            buscar(form, metodo) {
                this.$refs[form][metodo]();
            },
            abrirFormulario(componente) {
                this.forms[componente].mostrar = !this.forms[componente].mostrar;
            },
            modificar(form, metodo, datos) {
                this.$refs[form][metodo](datos);
            }
        },
        created() {
            db.version(1).stores({
                alumnos: '++idAlumno, codigo, nombre, direccion, telefono, email',
                matriculas: '++idLibro, alumnoSeleccionado, fecha, periodo, edicion',
               
            });
        }
    });
app.mount('#app');