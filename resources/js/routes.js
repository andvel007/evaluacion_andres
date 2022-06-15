const Home = () => import('./components/Home.vue')
const Contacto = () => import('./components/Contacto.vue')
//importamos los componentes para el usuario
const MostrarUs = () => import('./components/user/MostrarUs.vue')
const CrearUs = () => import('./components/user/CrearUs.vue')
const EditarUs = () => import('./components/user/EditarUs.vue')
//importamos los componentes para el device
const MostrarDev = () => import('./components/device/MostrarDev.vue')
const CrearDev = () => import('./components/device/CrearDev.vue')
const EditarDev = () => import('./components/device/EditarDev.vue')

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'mostrarUs',
        path: '/users',
        component: MostrarUs
    },
    {
        name: 'crearUsuario',
        path: '/crearus',
        component: CrearUs
    },
    {
        name: 'editarUsuario',
        path: '/editar/:id',
        component: EditarUs
    },
    {
        name: 'mostrarDev',
        path: '/devices',
        component: MostrarDev
    },
    {
        name: 'crearDevice',
        path: '/creardev',
        component: CrearDev
    },
    {
        name: 'editarDevice',
        path: '/editardev/:id',
        component: EditarDev
    },
     {
        name: 'contacto',
        path: '/contacto',
        component: Contacto
    }
]