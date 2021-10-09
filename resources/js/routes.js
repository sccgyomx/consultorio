const Home = () => import("./components/Home.vue");

// componentes para medical patients
const CrearMP = () => import("./components/medical_patient/Crear.vue");
const MostrarMP = () => import("./components/medical_patient/Mostrar.vue");
const EditarMP = () => import("./components/medical_patient/Editar.vue");
const Login = () => import("./components/auth/login.vue");
const Register = () => import("./components/auth/Register.vue");

// rutas
export const routes = [
    {
        name: "home",
        path: "/",
        component: Home,
        meta: {
            requiresAuth: true
        }
    },
    {
        name: "mostrarMedicalPatients",
        path: "/medicalPatients",
        component: MostrarMP
    },
    {
        name: "crearMedicalPatients",
        path: "/crearMedicalPatients",
        component: CrearMP
    },
    {
        name: "editarMedicalPatient",
        path: "/editarMedicalPatients/:id",
        component: EditarMP
    },
    {
        name: "Login",
        path: "/login",
        component: Login
    },
    {
        name: "Registro",
        path: "/register",
        component: Register
    }
];
