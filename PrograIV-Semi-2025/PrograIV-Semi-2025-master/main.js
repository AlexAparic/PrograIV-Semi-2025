const { createApp } = Vue;

createApp({
    data() {
        return {
            alumnos: [],
            codigo: '',
            nombre: '',
            direccion: '',
            departamento: '',
            municipio: '',
            distrito: '',
            telefono: '',
            sexo: '',
            fechaNacimiento: '',
            email: '',
            busqueda: '', 
            datosUbicacion: {
                "San Salvador": {
                    "San Salvador norte": ["Centro Histórico", "Colonia Escalón", "Ciudad Merliot"],
                    "San Salvador centro": ["Unicentro", "Las Margaritas", "Bosques del Río"],
                    "San Salvador oeste": ["Zacamil", "Centro", "San Roque"]
                },
                "La libertad": {
                    "Libertad norte": ["Centro", "La Sultana", "Merliot"],
                    "Libertad sur": ["Zona Industrial", "Universitaria", "Santa Elena"],
                    "Livertad centro": ["El Carmen", "San Sebastián", "Centro"]
                },
                "Santa Ana": {
                    "Santa Ana norte ": ["Distrito de Masahuat", "Distrito de Metapán", "Distrito de Texistepeque"],
                    "Santa Ana sur": ["San Pedro", "San Juan", "La Palma"],
                    "Santa Ana este": ["Las Flores", "Centro", "Candelaria"]
                }
            },
            municipios: [],
            distritos: []
        };
    },
    computed: {
        alumnosFiltrados() {
            let filtro = this.busqueda.toLowerCase();
            return this.alumnos.filter(alumno => 
                alumno.codigo.toLowerCase().includes(filtro) ||
                alumno.nombre.toLowerCase().includes(filtro) ||
                alumno.departamento.toLowerCase().includes(filtro) ||
                alumno.telefono.toLowerCase().includes(filtro) ||
                alumno.email.toLowerCase().includes(filtro)
            );
        }
    },
    methods: {
        cargarMunicipios() {
            this.municipios = Object.keys(this.datosUbicacion[this.departamento] || {});
            this.municipio = "";
            this.distritos = [];
        },
        cargarDistritos() {
            this.distritos = this.datosUbicacion[this.departamento]?.[this.municipio] || [];
            this.distrito = "";
        },
        guardarAlumno() {
            let alumno = {
                codigo: this.codigo,
                nombre: this.nombre,
                direccion: this.direccion,
                departamento: this.departamento,
                municipio: this.municipio,
                distrito: this.distrito,
                telefono: this.telefono,
                sexo: this.sexo,
                fechaNacimiento: this.fechaNacimiento,
                email: this.email
            };
            localStorage.setItem(this.codigo, JSON.stringify(alumno));
            this.listarAlumnos();
            this.limpiarFormulario();
        },
        listarAlumnos() {
            this.alumnos = [];
            for (let i = 0; i < localStorage.length; i++) {
                this.alumnos.push(JSON.parse(localStorage.getItem(localStorage.key(i))));
            }
        },
        verAlumno(alumno) {
           
            if (!localStorage.getItem(alumno.codigo)) return;
        
            Object.assign(this, alumno);
        },
        
        eliminarAlumno(alumno) {
            if (confirm(`¿Está seguro de eliminar el alumno ${alumno.nombre}?`)) {
                localStorage.removeItem(alumno.codigo);
                this.listarAlumnos(); 
                this.limpiarFormulario(); 
            }
        },
        limpiarFormulario() {
            this.codigo = '';
            this.nombre = '';
            this.direccion = '';
            this.departamento = '';
            this.municipio = '';
            this.distrito = '';
            this.telefono = '';
            this.sexo = '';
            this.fechaNacimiento = '';
            this.email = '';
            this.municipios = [];
            this.distritos = [];
        }
    },
    created() {
        this.listarAlumnos();
    }
}).mount("#app");

