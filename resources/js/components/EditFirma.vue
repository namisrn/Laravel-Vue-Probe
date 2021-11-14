<template>
    <div>
        <h3 class="text-center">Edit Firma</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateFirma">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="firmen.firmenname">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            firmen: {}
        }
    },
    created() {
        this.axios
            .get(`http://localhost:8000/api/firmens/${this.$route.params.id}`)
            .then((res) => {
                this.firmen = res.data;
            });
    },
    methods: {
        updateFirma() {
            this.axios
                .patch(`http://localhost:8000/api/firmens/${this.$route.params.id}`, this.firmen)
                .then((res) => {
                    this.$router.push({ name: 'home' });
                });
        }
    }
}
</script>
