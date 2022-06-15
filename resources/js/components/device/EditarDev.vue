<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Equipo</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" v-model="device.nombre">
                                </div>
                            </div>
                             <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <input type="text" class="form-control" v-model="device.marca">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <input type="text" class="form-control" v-model="device.modelo">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" class="form-control" v-model="device.color">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Nr Serie</label>
                                    <input type="text" class="form-control" v-model="device.serie">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>MAC</label>
                                    <input type="text" class="form-control" v-model="device.mac">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <select v-model="device.sistemaop">
                                    <option disabled value="SO">SO</option>
                                    <option>Windows</option>
                                    <option>MacOs</option>
                                    <option>Linux</option>
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-12 mb-2">
                                <select v-model="device.cargador">
                                    <option disabled value="Cargador">Cargador</option>
                                    <option>true</option>
                                    <option>false</option>
                                    <option></option>
                                </select>
                            </div>
                             <div class="col-12 mb-2">
                                <select v-model="device.user_id">
                                    <option disabled value="Usuario">Usuario</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" v-model="device.observacion" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Observación</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editarDevice",
    data(){
        return {
            device:{
                nombre:"",
                marca:"",
                modelo:"",
                color:"",
                serie:"",
                mac:"",
                sistemaop:"",
                cargador:"",
                observacion:"",
                user_id:""

            }
        }
    },
    mounted(){
        this.mostrarDev()
    },
    methods:{
        async mostrarDev(){
            await this.axios.get(`/api/device/${this.$route.params.id}`).then(response=>{
                const { nombre, marca, modelo, color, serie, mac, sistemaop, cargador, observacion } = response.data
                this.device.nombre = nombre
                this.device.marca = marca
                this.device.modelo = modelo
                this.device.color = color
                this.device.serie = serie
                this.device.mac = mac
                this.device.sistemaop = sistemaop
                this.device.cargador = cargador
                this.device.observacion = observacion
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/blog/${this.$route.params.id}`,this.device).then(response=>{
                this.$router.push({name:"mostrarDev"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>