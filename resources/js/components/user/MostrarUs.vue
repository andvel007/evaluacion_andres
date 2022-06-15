<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"crearUsuario"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cédula</th>
                                    <th>Correo</th>
                                    <th>Contraseña</th>
                                    <th>Provincia</th>
                                    <th>Ciudad</th>
                                    <th>Dirección</th>
                                    <th>Foto</th>
                                    <th>Teléfono</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <td>{{ user.id }}</td>
                                    <td>{{ user.nombre }}</td>
                                    <td>{{ user.apellido }}</td>
                                    <td>{{ user.cedula }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>{{ user.password }}</td>
                                    <td>{{ user.provincia }}</td>
                                    <td>{{ user.ciudad }}</td>
                                    <td>{{ user.direccion }}</td>
                                    <td>{{ user.foto }}</td>
                                    <td>{{ user.telefono }}</td>
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"EditarUs",params:{id:user.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarUser(user.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    </div>
</template>

<script>
export default {
    name:"users",
    data(){
        return {
            users:[]
        }
    },
    mounted(){
        this.mostrarUsers()
    },
    methods:{
        async mostrarUsers(){
            await this.axios.get('/api/user').then(response=>{
                this.users = response.data
            }).catch(error=>{
                console.log(error)
                this.users = []
            })
        },
        borrarUser(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/user/${id}`).then(response=>{
                    this.MostrarUs()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>