<template>
    <div>
        <h3 class="text-center">Edit Mitarbeiter</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateMitarbeiter">
                    <div class="form-group">
                        <label>Vorname</label>
                        <input type="text" class="form-control" v-model="mitarbeiter.vorname">
                    </div>
                    <div class="form-group">
                        <label>Nachname</label>
                        <input type="text" class="form-control" v-model="mitarbeiter.nachname">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="mitarbeiter.email">
                    </div>
                    <div class="form-group">
                        <label>Firma ID</label>
                        <input type="text" class="form-control" v-model="mitarbeiter.firmen_id">
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
            mitarbeiter: {}
        }
    },
    created() {
        this.axios
            .get(`http://localhost:8000/api/mitarbeiters/${this.$route.params.id}`)
            .then((res) => {
                this.mitarbeiter = res.data;
            });
    },
    methods: {
        updateMitarbeiter() {
            this.axios
                .patch(`http://localhost:8000/api/mitarbeiters/${this.$route.params.id}`, this.firmen)
                .then((res) => {
                    this.$router.push({ name: 'home' });
                });
        }
    }
}
</script>
