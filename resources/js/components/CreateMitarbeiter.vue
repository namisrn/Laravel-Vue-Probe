<template>
    <div>
        <h3 class="text-center">Neue Mitarbeiter</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addMitarbeiter">
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
            mitarbeiter: {}
        }
    },
    methods: {
        addMitarbeiter() {
            this.axios
                .post('http://localhost:8000/api/mitarbeiters', this.mitarbeiter)
                .then(response => (
                    this.$router.push({ name: 'AllMitarbeiter' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}
</script>
