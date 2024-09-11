let routes= [];

import dashboard from "./vue-routes-dashboard";
import category from './vue-routes-categories';
import taxnonmy from "./vue-routes-taxonomies";

routes = routes.concat(dashboard);
routes = routes.concat(category);
routes = routes.concat(taxnonmy);

export default routes;
