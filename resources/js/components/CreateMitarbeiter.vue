<template>
    <div>
        <h3 class="text-center">Neue Mitarbeiter</h3>
        <div class="row">
            <div class="col-md-6">
                <form ref="form">
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
                        <select class="form-control">
                            <option v-for="option in firmens" v-bind:value="option.id">
                                {{option.firmenname}}
                            </option>
                        </select>
                    </div>
                    <button v-on:click="addMitarbeiter" type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            mitarbeiter: {},
            firmens:[]
        }
    },
    methods: {
        addMitarbeiter() {
            this.axios
                .post('http://localhost:8000/api/mitarbeiters', {

                })
                .then(response => (
                    this.$router.push({ name: 'AllMitarbeiter' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/firmens/')
            .then(response => {
                this.firmens = response.data;
            });

    }
}
</script>
