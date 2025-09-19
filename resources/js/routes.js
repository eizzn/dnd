import ArmorList from './Pages/Armors/ArmorList.vue';
import ClassList from "@/Pages/Classes/ClassList.vue";
import ClassDetails from "@/Pages/Classes/ClassDetails.vue";
import FeatList from './Pages/Feats/FeatList.vue';
import FeatDetails from "@/Pages/Feats/FeatDetails.vue";
import FormulaList from './Pages/Formulas/FormulaList.vue';
import FormulaDetails from "@/Pages/Formulas/FormulaDetails.vue";
import GodList from './Pages/Gods/GodList.vue';
import GodDetails from "@/Pages/Gods/GodDetails.vue";
import PowerList from './Pages/Powers/PowerList.vue';
import PowerDetails from "@/Pages/Powers/PowerDetails.vue";
import SpellList from './Pages/Spells/SpellList.vue';
import SpellDetails from "@/Pages/Spells/SpellDetails.vue";
import TalentList from './Pages/Talents/TalentList.vue';
import TalentDetails from "@/Pages/Talents/TalentDetails.vue";
import ConditionList from "@/Pages/Conditions/ConditionList.vue";
import ConditionDetails from "@/Pages/Conditions/ConditionDetails.vue";
import RaceList from "@/Pages/Races/RaceList.vue";
import RaceDetails from "@/Pages/Races/RaceDetails.vue";
import AlphabetList from "@/Pages/Alphabets/AlphabetList.vue";
import AlphabetDetails from "@/Pages/Alphabets/AlphabetDetails.vue";
import LanguageList from "@/Pages/Languages/LanguageList.vue";
import LanguageDetails from "@/Pages/Languages/LanguageDetails.vue";
import PageList from "@/Pages/Pages/PageList.vue";
import PageDetails from "@/Pages/Pages/PageDetails.vue";
import FeatureList from "@/Pages/Features/FeatureList.vue";
import FeatureDetails from "@/Pages/Features/FeatureDetails.vue";
import PantheonList from "@/Pages/Pantheons/PantheonList.vue";
import PantheonDetails from "@/Pages/Pantheons/PantheonDetails.vue";
import TypeList from "@/Pages/Types/TypeList.vue";
import TypeDetails from "@/Pages/Types/TypeDetails.vue";
import EquipmentList from "@/Pages/Equipments/EquipmentList.vue";
import EquipmentDetails from "@/Pages/Equipments/EquipmentDetails.vue";
import MonsterList from "@/Pages/Monsters/MonsterList.vue";
import MonsterDetails from "@/Pages/Monsters/MonsterDetails.vue";
import MaterialList from "@/Pages/Materials/MaterialList.vue";
import MaterialDetails from "@/Pages/Materials/MaterialDetails.vue";

export default [
    {
        path: '/alphabets',
        name: 'AlphabetList',
        component: AlphabetList,
    },
    {
        path: '/alphabet/:id',
        name: 'AlphabetDetails',
        component: AlphabetDetails,
    },
    {
        path: '/armors',
        name: 'ArmorList',
        component: ArmorList,
    },
    {
        path: '/armor/:id',
        name: 'ArmorDetails',
        component: ArmorList,
    },
    {
        path: '/classes',
        name: 'ClassList',
        component: ClassList,
    },
    {
        path: '/class/:id',
        name: 'ClassDetails',
        component: ClassDetails,
    },
    {
        path: '/conditions',
        name: 'ConditionList',
        component: ConditionList,
    },
    {
        path: '/condition/:id',
        name: 'ConditionDetails',
        component: ConditionDetails,
    },
    {
        path: '/equipments',
        name: 'EquipmentList',
        component: EquipmentList,
    },
    {
        path: '/equipment/:id',
        name: 'EquipmentDetails',
        component: EquipmentDetails,
    },
    {
        path: '/feats',
        name: 'FeatList',
        component: FeatList,
    },
    {
        path: '/feat/:id',
        name: 'FeatDetails',
        component: FeatDetails,
    },
    {
        path: '/features',
        name: 'FeatureList',
        component: FeatureList,
    },
    {
        path: '/feature/:id',
        name: 'FeatureDetails',
        component: FeatureDetails,
    },
    {
        path: '/formulas',
        name: 'FormulaList',
        component: FormulaList,
    },
    {
        path: '/formula/:id',
        name: 'FormulaDetails',
        component: FormulaDetails,
    },
    {
        path: '/gods',
        name: 'GodList',
        component: GodList,
    },
    {
        path: '/god/:godId/pantheon/:pantheonId',
        name: 'GodDetails',
        component: GodDetails,
    },
    {
        path: '/languages',
        name: 'LanguageList',
        component: LanguageList,
    },
    {
        path: '/language/:id',
        name: 'LanguageDetails',
        component: LanguageDetails,
    },
    {
        path: '/materials',
        name: 'MaterialList',
        component: MaterialList,
    },
    {
        path: '/material/:id',
        name: 'MaterialDetails',
        component: MaterialDetails,
    },
    {
        path: '/monsters',
        name: 'MonsterList',
        component: MonsterList,
    },
    {
        path: '/monster/:id',
        name: 'MonsterDetails',
        component: MonsterDetails,
    },
    {
        path: '/pantheons',
        name: 'PantheonList',
        component: PantheonList,
    },
    {
        path: '/pantheon/:id',
        name: 'PantheonDetails',
        component: PantheonDetails,
    },
    {
        path: '/pages',
        name: 'PageList',
        component: PageList,
    },
    {
        path: '/page/:id',
        name: 'PageDetails',
        component: PageDetails,
    },
    {
        path: '/powers',
        name: 'PowerList',
        component: PowerList,
    },
    {
        path: '/power/:id',
        name: 'PowerDetails',
        component: PowerDetails,
    },
    {
        path: '/races',
        name: 'RaceList',
        component: RaceList,
    },
    {
        path: '/race/:id',
        name: 'RaceDetails',
        component: RaceDetails,
    },
    {
        path: '/spells',
        name: 'SpellList',
        component: SpellList,
    },
    {
        path: '/spell/:id',
        name: 'SpellDetails',
        component: SpellDetails,
    },
    {
        path: '/talents',
        name: 'TalentList',
        component: TalentList,
    },
    {
        path: '/talent/:id',
        name: 'TalentDetails',
        component: TalentDetails,
    },
    {
        path: '/types',
        name: 'TypeList',
        component: TypeList,
    },
    {
        path: '/type/:id',
        name: 'TypeDetails',
        component: TypeDetails,
    }
];
