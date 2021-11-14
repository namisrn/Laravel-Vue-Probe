
import AllFirmen from "./components/AllFirmen";
import CreateFirma from "./components/CreateFirma";
import EditFirma from "./components/EditFirma";
import AllMitarbeiter from "./components/AllMitarbeiter";
import CreateMitarbeiter from "./components/CreateMitarbeiter";
import EditMitarbeiter from "./components/EditMitarbeiter";
import Home from "./components/Home";

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'AllFirmen',
        path: '/alleFirmen',
        component: AllFirmen
    },
    {
        name: 'createFirma',
        path: '/createFirma',
        component: CreateFirma
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditFirma
    },
    {
        name: 'AllMitarbeiter',
        path: '/alleMitarbeiter',
        component: AllMitarbeiter
    },
    {
        name: 'CreateMitarbeiter',
        path: '/createMitarbeiter',
        component: CreateMitarbeiter
    },
    {
        name: 'EditMitarbeiter',
        path: '/editMitarbeiter',
        component: EditMitarbeiter
    }
];
