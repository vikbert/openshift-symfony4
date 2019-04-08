# Symfony 4 + OpenShift

Run A Symfony project on OpenShift.

## How to start
Install `minishift` on Mac based on this guideline:

https://docs.okd.io/latest/minishift/getting-started/preparing-to-install.html


## Important Documentations

Developer Guide

https://docs.okd.io/latest/dev_guide/index.html

CLI Reference

https://docs.okd.io/latest/cli_reference/index.html

OpenShift Online Login

https://manage.openshift.com/sign_in

Interactive Learning

https://learn.openshift.com/

## Essential CLIs

```
login
✔ oc login -u developer

create new project
✔ oc new-project symfony

create new app via s2i
✔ oc new-app openshift/php:7.1~https://github.com/vikbert/openshift-symfony4.git

list the pods
✔ oc get pods

remote shell on container
✔ oc rsh openshift-symfony4-2-rtw5l

logs from build container
✔ oc logs -f bc/openshift-symfony4

logs from deploy container
✔ oc logs -f dc/openshift-symfony4

create a external route
✔ oc expose service openshift-symfony4

scale application containers to "3"
✔ oc scale --replicas=3 dc openshift-symfony4

rebuild the app by given build config
✔ oc start-build openshift-symfony4

delete relevant resource
✔ oc delete all -l app=openshift-symfony4

remove the complete project
✔ oc delete project symfony
```

