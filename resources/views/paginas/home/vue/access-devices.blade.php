Vue.component("access-devices", {
  data: function () {
    return { loading: false,devicesGroup:[] };
  },
  methods: {
    getDevices: function () {
      const url = "/api/access-devices";

      this.loading = true;

      const vue = this;

      axios
        .get(url)
        .then((response) => {
          const data = response.data;

          if (data.Validacion === true) {
            vue.devicesGroup =  Object.values(data.Data);

            console.log(vue.devicesGroup);
          }
        })
        .catch((error) => {
          console.warn(error.message);
        })
        .finally(() => {
          this.loading = false;
        });
    },
  },
  
  mounted() {
    this.getDevices();
  },
  template: `
  
  <div class="w-100  d-flex flex-column gap-24"> 
  

      <div class="rounded-lg overflow-hidden" v-for="(group,index) in devicesGroup" :key="index">
        <div class="d-flex gap-8 align-items-center" >

            <h2 class="mb-0 h4">@{{group.name}}</h2>
            <img :src="group.img" width="100" alt="">
        </div>
        <div class="bg-light rounded-lg row mx-0 w-100 p-1 p-lg-4 py-4" style="grid-row-gap: 16px;" >



            <div class="col-6 col-lg-2 col-lg-1 px-1" v-for="(device,index ) in group.devices" :key="device.model">
            <div class="bg-white p-2 rounded-lg d-flex flex-column align-items-center gap-8" >
                <div class="w-100"> 
                
                  <img :src="device.img" class="img-fluid" />
                </div>

                <h3 class="text-center h6 mb-0">
                  <strong> @{{device.model}} </strong>
                </h3>
              

            </div>
            </div>
            

        </div>



      </div>

       

      <div v-if="loading" class="w-100 h3 my-5 text-center opacity-on">
          Cargando...

      </div>
  
  
  </div>
  
  `,
});
