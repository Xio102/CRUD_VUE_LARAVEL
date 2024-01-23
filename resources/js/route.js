const Home = ()=> import('./components/home.vue')
const Producto = ()=> import('./components/Producto.vue')

const Listar = ()=> import('./components/products/home.vue')
const Create = ()=> import('./components/products/home.vue')
const Update = ()=> import('./components/products/home.vue')

export const routes = [
    {
        name:'home',
        path: '/',
        component:Home
    },
    {
        name:'producto',
        path: '/producto',
        component:Home
    },
    {
        name:'listar',
        path: '/listar',
        component:Listar,
    },
    {
        name:'crear',
        path: '/crear',
        component:Create,
    },
    {
        name:'actualizar',
        path: '/actualizar/:id',
        component:Update,
    }
]