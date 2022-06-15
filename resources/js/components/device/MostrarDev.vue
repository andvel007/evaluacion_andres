<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to='{name:"crearDevice"}' class="btn btn-success"><i class="fas fa-plus-circle"></i></router-link>
        </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Color</th>
                                    <th>Serie</th>
                                    <th>Mac</th>
                                    <th>Sistena Operativo</th>
                                    <th>Cargador</th>
                                    <th>Observacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="device in devices" :key="device.id">
                                    <td>{{ device.id }}</td>
                                    <td>{{ device.nombre }}</td>
                                    <td>{{ device.marca }}</td>
                                    <td>{{ device.modelo }}</td>
                                    <td>{{ device.color }}</td>
                                    <td>{{ device.serie }}</td>
                                    <td>{{ device.mac }}</td>
                                    <td>{{ device.sistemaop }}</td>
                                    <td>{{ device.cargador }}</td>
                                    <td>{{ device.observacion }}</td>
                                    <td>
                                        <!-- llamamos al componente para Editar     -->
                                        <router-link :to='{name:"editarDevice",params:{id:device.id}}' class="btn btn-info"><i class="fas fa-edit"></i></router-link>
                                        <a type="button" @click="borrarDevice(device.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
    name:"devices",
    data(){
        return {
            devices:[]
        }
    },
    mounted(){
        this.mostrarDevices()
    },
    methods:{
        async mostrarDevices(){
            await this.axios.get('/api/device').then(response=>{
                this.devices = response.data
            }).catch(error=>{
                console.log(error)
                this.devices = []
            })
        },
        borrarDevice(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/device/${id}`).then(response=>{
                    this.mostrarDevices()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>