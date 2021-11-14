<template>
    <div>
        <h3 class="text-center">Neue Firma</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addFirma">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="firmen.firmenname">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
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
    methods: {
        addFirma() {
            this.axios
                .post('http://localhost:8000/api/firmens', this.firmen)
                .then(response => (
                    this.$router.push({ name: 'home' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}
</script>
