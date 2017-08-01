[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/DigitalOcean/functions?utm_source=RapidAPIGitHub_DigitalOceanFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# DigitalOcean Package
The DigitalOcean API allows you to manage Droplets and resources within the DigitalOcean cloud in a simple, programmatic way using conventional HTTP requests. The endpoints are intuitive and powerful, allowing you to easily make calls to retrieve information or to execute actions.
* Domain: [digitalocean.com](https://digitalocean.com)
* Credentials: accessToken

## How to get credentials: 
0. Item one 
1. Item two
 
## DigitalOcean.getActionsList
To list all of the actions that have been executed on the current account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getSingleAction
The result will be a JSON object with an action key.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| actionId   | String     | Action id

## DigitalOcean.getVolumesList
To list all of the Block Storage volumes available on your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| region     | String     | May be provided as query paramater in order to restrict results to volumes available in a specific region.

## DigitalOcean.createVolume
Create new volume

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your Digital Ocean access token
| sizeGigabytes| String     | The size of the Block Storage volume in GiB (1024^3).
| name         | String     | A human-readable name for the Block Storage volume. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 64 characters.
| description  | String     | An optional free-form text field to describe a Block Storage volume.
| description  | String     | An optional free-form text field to describe a Block Storage volume.
| region       | String     | The region where the Block Storage volume will be created. When setting a region, the value should be the slug identifier for the region. When you query a Block Storage volume, the entire region object will be returned. Should not be specified with a snapshot_id.
| snapshotId   | String     | The unique identifier for the volume snapshot from which to create the volume. Should not be specified with a region_id.

## DigitalOcean.getSingleVolume
Show information about a Block Storage volume

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeId   | String     | The unique identifier for the Block Storage volume.

## DigitalOcean.getVolumeByName
Retrieve information about a Block Storage volume by name.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| name       | String     | A human-readable name for the Block Storage volume. Must be lowercase and be composed only of numbers, letters and `-`, up to a limit of 64 characters.
| region     | String     | May be provided as query paramater in order to restrict results to volumes available in a specific region.

## DigitalOcean.getVolumeSnapshots
Retrieve the snapshots that have been created from a volume

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeId   | String     | The unique identifier for the Block Storage volume.
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.createVolumeSnapshot
Create a snapshot from a volume

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeId   | String     | The unique identifier for the Block Storage volume.
| name       | String     | A human-readable name for the volume snapshot.

## DigitalOcean.deleteVolume
Delete single volume

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeId   | String     | The unique identifier for the Block Storage volume.

## DigitalOcean.deleteVolumeByName
Delete single volume by name

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| name       | String     | A human-readable name for the Block Storage volume.

## DigitalOcean.attachVolumeToDroplet
Attach a Block Storage volume to a Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeId   | String     | The unique identifier for the Block Storage volume.
| type       | String     | This must be 'attach'
| dropletId  | Number     | The unique identifier for the Droplet the volume will be attached or detached from.
| region     | Number     | The slug identifier for the region the volume is located in.

## DigitalOcean.attachVolumeToDropletByName
Attach a Block Storage volume to a Droplet using its name.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeName | String     | The name of the Block Storage volume.
| type       | String     | This must be 'attach'
| dropletId  | Number     | The unique identifier for the Droplet the volume will be attached or detached from.
| region     | Number     | The slug identifier for the region the volume is located in.

## DigitalOcean.removeVolumeFromDroplet
Detach a Block Storage volume from a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeId   | String     | The unique identifier for the Block Storage volume.
| type       | String     | This must be `detach`
| dropletId  | Number     | The unique identifier for the Droplet the volume will be attached or detached from.
| region     | Number     | The slug identifier for the region the volume is located in.

## DigitalOcean.removeVolumeFromDropletByName
Detach a Block Storage volume from a Droplet using its name

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeName | String     | The name of the Block Storage volume.
| type       | String     | This must be 'detach'
| dropletId  | Number     | The unique identifier for the Droplet the volume will be attached or detached from.
| region     | Number     | The slug identifier for the region the volume is located in.

## DigitalOcean.resizeVolume
Resize a Block Storage volume.

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your Digital Ocean access token
| volumeId     | String     | The unique identifier for the Block Storage volume.
| type         | String     | This must be `resize`
| sizeGigabytes| Number     | The new size of the Block Storage volume in GiB (1024^3).
| region       | String     | The slug identifier for the region the volume is located in.

## DigitalOcean.getVolumeActions
Retrieve all actions that have been executed on a volume.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeId   | String     | The unique identifier for the Block Storage volume.
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getSingleVolumeAction
Retrieve the status of a volume action

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| volumeId   | String     | The unique identifier for the Block Storage volume.
| actionId   | String     | A unique numeric ID that can be used to identify and reference an action.

## DigitalOcean.createCertificate
Upload a new SSL certificate

| Field           | Type       | Description
|-----------------|------------|----------
| accessToken     | credentials| Your Digital Ocean access token
| name            | String     | A unique human-readable name referring to a certificate.
| privateKey      | String     | A unique human-readable name referring to a certificate.
| leafCertificate | String     | The contents of a PEM-formatted public SSL certificate.
| certificateChain| String     | The full PEM-formatted trust chain between the certificate authority's certificate and your domain's SSL certificate.

## DigitalOcean.getSingleCertificate
Show information about an existing certificate.

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your Digital Ocean access token
| certificateId| String     | A unique ID that can be used to identify and reference a certificate.

## DigitalOcean.getAllCertificates
List all of the certificates available on your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token

## DigitalOcean.deleteCertificate
Delete a specific certificate.

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your Digital Ocean access token
| certificateId| String     | A unique ID that can be used to identify and reference a certificate.

## DigitalOcean.getAllDomains
Retrieve a list of all of the domains in your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token

## DigitalOcean.createDomain
Create a new domain.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| name       | String     | The domain name to add to the DigitalOcean DNS management interface. The name must be unique in DigitalOcean's DNS system. The request will fail if the name has already been taken.
| ipAddress  | String     | This attribute contains the IP address you want the domain to point to.

## DigitalOcean.getSingleDomain
Get details about a specific domain.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| domain     | String     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.

## DigitalOcean.deleteDomain
Delete a domain.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| domain     | String     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.

## DigitalOcean.getAllDomainRecords
Get a listing of all records configured for a domain.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| domain     | String     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.

## DigitalOcean.createDomainRecord
Create an existing record.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| domain     | String     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.
| type       | Select     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.
| name       | String     | The host name, alias, or service being defined by the record.
| data       | String     | Variable data depending on record type. See the [Domain Records]() section for more detail on each record type.
| priority   | String     | The priority of the host (for SRV and MX records. null otherwise).
| port       | String     | The port that the service is accessible on (for SRV records only. null otherwise).
| ttl        | Number     | This value is the time to live for the record, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested. If not set, the default value is 1800.
| weight     | Number     | The weight of records with the same priority (for SRV records only. null otherwise).

## DigitalOcean.getSingleDomainRecord
Retrieve a specific domain record.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| domain     | String     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.
| recordId   | String     | A unique identifier for each domain record.

## DigitalOcean.updateDomainRecord
Update an existing record.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| domain     | String     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.
| recordId   | String     | A unique identifier for each domain record.
| type       | Select     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.
| name       | String     | The host name, alias, or service being defined by the record.
| data       | String     | Variable data depending on record type. See the [Domain Records]() section for more detail on each record type.
| priority   | String     | The priority of the host (for SRV and MX records. null otherwise).
| port       | String     | The port that the service is accessible on (for SRV records only. null otherwise).
| ttl        | Number     | This value is the time to live for the record, in seconds. This defines the time frame that clients can cache queried information before a refresh should be requested. If not set, the default value is 1800.
| weight     | Number     | The weight of records with the same priority (for SRV records only. null otherwise).

## DigitalOcean.deleteDomainRecord
Retrieve a specific domain record.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| domain     | String     | The name of the domain itself. This should follow the standard domain format of domain.TLD. For instance, example.com is a valid domain name.
| recordId   | String     | A unique identifier for each domain record.

## DigitalOcean.createDroplet
Create a new Droplet.

| Field            | Type       | Description
|------------------|------------|----------
| accessToken      | credentials| Your Digital Ocean access token
| name             | String     | The human-readable string you wish to use when displaying the Droplet name. The name, if set to a domain name managed in the DigitalOcean DNS management system, will configure a PTR record for the Droplet. The name set during creation will also determine the hostname for the Droplet in its internal configuration.
| region           | String     | The unique slug identifier for the region that you wish to deploy in.
| size             | String     | The unique slug identifier for the size that you wish to select for this Droplet.
| image            | String     | The image ID of a public or private image, or the unique slug identifier for a public image. This image will be the base image for your Droplet.
| sshKeys          | List       | An array containing the IDs or fingerprints of the SSH keys that you wish to embed in the Droplet's root account upon creation.
| backups          | Boolean    | A boolean indicating whether automated backups should be enabled for the Droplet. Automated backups can only be enabled when the Droplet is created.
| ipv6             | Boolean    | A boolean indicating whether IPv6 is enabled on the Droplet.
| privateNetworking| Boolean    | A boolean indicating whether private networking is enabled for the Droplet. Private networking is currently only available in certain regions.
| userData         | String     | A string containing 'user data' which may be used to configure the Droplet on first boot, often a 'cloud-config' file or Bash script. It must be plain text and may not exceed 64 KiB in size.
| monitoring       | Boolean    | A boolean indicating whether to install the DigitalOcean agent for monitoring.
| volumes          | List       | A flat array including the unique string identifier for each Block Storage volume to be attached to the Droplet. At the moment a volume can only be attached to a single Droplet.
| tags             | List       | A flat array of tag names as strings to apply to the Droplet after it is created. Tag names can either be existing or new tags.

## DigitalOcean.createMultiplyDroplets
Create a new Droplet.

| Field            | Type       | Description
|------------------|------------|----------
| accessToken      | credentials| Your Digital Ocean access token
| names            | List       | An array of human human-readable strings you wish to use when displaying the Droplet name. Each name, if set to a domain name managed in the DigitalOcean DNS management system, will configure a PTR record for the Droplet. Each name set during creation will also determine the hostname for the Droplet in its internal configuration.
| region           | String     | The unique slug identifier for the region that you wish to deploy in.
| size             | String     | The unique slug identifier for the size that you wish to select for this Droplet.
| image            | String     | The image ID of a public or private image, or the unique slug identifier for a public image. This image will be the base image for your Droplet.
| sshKeys          | List       | An array containing the IDs or fingerprints of the SSH keys that you wish to embed in the Droplet's root account upon creation.
| backups          | Boolean    | A boolean indicating whether automated backups should be enabled for the Droplet. Automated backups can only be enabled when the Droplet is created.
| ipv6             | Boolean    | A boolean indicating whether IPv6 is enabled on the Droplet.
| privateNetworking| Boolean    | A boolean indicating whether private networking is enabled for the Droplet. Private networking is currently only available in certain regions.
| userData         | String     | A string containing 'user data' which may be used to configure the Droplet on first boot, often a 'cloud-config' file or Bash script. It must be plain text and may not exceed 64 KiB in size.
| monitoring       | Boolean    | A boolean indicating whether to install the DigitalOcean agent for monitoring.
| volumes          | List       | A flat array including the unique string identifier for each Block Storage volume to be attached to the Droplet. At the moment a volume can only be attached to a single Droplet.
| tags             | List       | A flat array of tag names as strings to apply to the Droplet after it is created. Tag names can either be existing or new tags.

## DigitalOcean.getSingleDroplet
Show an individual droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.

## DigitalOcean.getAllDroplets
List all Droplets in your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getAllDropletsByTag
List Droplets by a tag.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| tagName    | Sting      | Page number
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getAvailableKernels
Retrieve a list of all kernels available to a Dropet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.

## DigitalOcean.getKernelSnapshots
Retrieve the snapshots that have been created from a Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.

## DigitalOcean.getKernelBackups
Retrieve any backups associated with a Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.

## DigitalOcean.getKernelActions
Retrieve any actions associated with a Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.

## DigitalOcean.deleteDroplet
Delete a Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.

## DigitalOcean.deleteDropletByTag
Delete Droplets by a tag.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| tagName    | String     | Tag of deleted droplet

## DigitalOcean.getDropletNeighbors
Retrieve a list of Droplets that are running on the same physical server.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.

## DigitalOcean.getAllNeighbors
Retrieve a list of Droplets that are running on the same physical server.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.

## DigitalOcean.enableBackups
Enable backups on an existing Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be enable_backups

## DigitalOcean.disableBackups
Disable backups on an existing Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be disable_backups

## DigitalOcean.rebootDroplet
Reboot a Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be reboot

## DigitalOcean.dropletPowerCycle
Power off and then back on.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be power_cycle

## DigitalOcean.dropletShutdown
Shutdown a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be shutdown

## DigitalOcean.dropletPowerOff
Power off a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be power_off

## DigitalOcean.dropletRestore
Restore a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be restore
| image      | String     | An image slug or ID. This represents the image that the Droplet will use as a base.

## DigitalOcean.dropletPasswordReset
Reset the password for a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be password_reset

## DigitalOcean.resizeDroplet
Resize a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be resize
| disk       | Boolean    | Whether to increase disk size.
| size       | String     | The size slug that you want to resize to.

## DigitalOcean.rebuildDroplet
Rebuild a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be rebuild
| image      | String     | An image slug or ID. This represents the image that the Droplet will use as a base.

## DigitalOcean.renameDroplet
Rename a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be rename
| name       | String     | The new name for the Droplet.

## DigitalOcean.changeDropletKernel
Change the kernel of a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be change_kernel
| kernel     | String     | A unique number used to identify and reference a specific kernel.

## DigitalOcean.enableIPv6ToDroplet
Enable IPv6 networking on an existing Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be enable_ipv6

## DigitalOcean.enablePrivateNetworkingToDroplet
Enable private networking on an existing Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be enable_private_networking

## DigitalOcean.dropletSnapshot
Snapshot a Droplet

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be snapshot
| name       | String     | The name to give the new snapshot.

## DigitalOcean.taggedDropletAction
Some actions can be performed in bulk on tagged Droplets.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| type       | Select     | Must be snapshot
| tagName    | String     | The tag name.

## DigitalOcean.getDropletAction
Retrieve a Droplet action.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | A unique identifier for each Droplet instance. This is automatically generated upon Droplet creation.
| actionId   | String     | A unique identifier for each Droplet action event. This is used to reference a specific action that was requested.

## DigitalOcean.getFloatingIps
List all of the Floating IPs.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.createFloatingIp
On creation, a Floating IP must be either assigned to a Droplet or reserved to a region.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| dropletId  | String     | The ID of Droplet that the Floating IP will be assigned to.

## DigitalOcean.createRegionFloatingIp
On creation, a Floating IP must be either assigned to a Droplet or reserved to a region. 

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| region     | String     | The slug identifier for the region the Floating IP will be reserved to.

## DigitalOcean.getSingleFloatingIp
Show information about a Floating IP.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| floatingIp | String     | Example: 45.55.96.47

## DigitalOcean.deleteFloatingIp
Delete Floating IP.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| floatingIp | String     | Example: 45.55.96.47

## DigitalOcean.assignFloatingIpToDroplet
Assign a Floating IP to a Droplet.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| floatingIp | String     | Example: 45.55.96.47
| type       | Select     | Must be: assign
| dropletId  | Number     | Number of items you would like per page

## DigitalOcean.unassignFloatingIp
Unassign a Floating IP.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| floatingIp | String     | Example: 45.55.96.47
| type       | Select     | Must be: unassign

## DigitalOcean.getAllFloatingIpActions
Retrieve all actions that have been executed on a Floating IP.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| floatingIp | String     | Example: 45.55.96.47

## DigitalOcean.getSingleFloatingIpAction
Retrieve the status of a Floating IP action.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| floatingIp | String     | Example: 45.55.96.47
| actionId   | String     | A unique numeric ID that can be used to identify and reference an action.

## DigitalOcean.createFirewall
Create a new Cloud Firewall.

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your Digital Ocean access token
| name         | String     | A human-readable name for a Firewall.
| inboundRules | JSON       | An object specifying the inbound access rules for a Firewall (see example below).
| outboundRules| JSON       | An object specifying the outbound access rules for a Firewall (see table below).
| dropletIds   | List       | An array containing the IDs of the Droplets to be assigned to the Firewall.
| tags         | List       | An array containing the names of the Tags to be assigned to the Firewall..

## DigitalOcean.getSingleFirewall
Show information about an existing Cloud Firewall.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| firewallId | String     | A unique ID that can be used to identify and reference a Firewall.

## DigitalOcean.getAllFirewalls
List all of the Cloud Firewalls available on your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token

## DigitalOcean.updateFirewall
Update the configuration of an existing Cloud Firewall.

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your Digital Ocean access token
| firewallId   | String     | A unique ID that can be used to identify and reference a Firewall.
| name         | String     | A human-readable name for a Firewall.
| inboundRules | JSON       | An object specifying the inbound access rules for a Firewall (see example below).
| outboundRules| JSON       | An object specifying the outbound access rules for a Firewall (see table below).
| dropletIds   | List       | An array containing the IDs of the Droplets to be assigned to the Firewall.
| tags         | List       | An array containing the names of the Tags to be assigned to the Firewall..

## DigitalOcean.deleteFirewall
Delete a Cloud Firewall.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| firewallId | String     | A unique ID that can be used to identify and reference a Firewall.

## DigitalOcean.addDropletToFirewall
Assign a Droplet to a Cloud Firewall.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| firewallId | String     | A unique ID that can be used to identify and reference a Firewall.
| droplets   | List       | An array containing the IDs of the Droplets to be assigned to the Firewall.

## DigitalOcean.removeDropletFromFirewall
Assign a Droplet to a Cloud Firewall.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| firewallId | String     | A unique ID that can be used to identify and reference a Firewall.
| droplets   | List       | An array containing the IDs of the Droplets to be assigned to the Firewall.

## DigitalOcean.addTagsToFirewall
Assign a Tag representing a group of Droplets to a Cloud Firewall.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| firewallId | String     | A unique ID that can be used to identify and reference a Firewall.
| tags       | List       | An array containing the names of the Tags to be assigned to the Firewall.

## DigitalOcean.removeTagsToFirewall
Remove a Tag representing a group of Droplets to a Cloud Firewall.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| firewallId | String     | A unique ID that can be used to identify and reference a Firewall.
| tags       | List       | An array containing the names of the Tags to be assigned to the Firewall.

## DigitalOcean.addRulesToFirewall
Add additional access rules to a Cloud Firewall.

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your Digital Ocean access token
| firewallId   | String     | A unique ID that can be used to identify and reference a Firewall.
| inboundRules | Array      | Attribute containing an array of rules to be added..
| outboundRules| Array      | Attribute containing an array of rules to be added..

## DigitalOcean.removeRulesToFirewall
Remove access rules from a Cloud Firewall.

| Field        | Type       | Description
|--------------|------------|----------
| accessToken  | credentials| Your Digital Ocean access token
| firewallId   | String     | A unique ID that can be used to identify and reference a Firewall.
| inboundRules | Array      | Attribute containing an array of rules to be added..
| outboundRules| Array      | Attribute containing an array of rules to be added..

## DigitalOcean.getAllImages
List all of the images available on your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getAllDistributionImages
Retrieve only distribution images.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getAllApplicationImages
Retrieve only application images.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getAllUserImages
Retrieve only user images.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getImageActions
Retrieve all actions that have been executed on an image.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| imageId    | String     | Image id
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getSingleImage
Retrieve information about an image (public or private).

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| imageId    | String     | Image id

## DigitalOcean.getImageBySlug
Retrieve information about a public image.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| slug       | String     | A uniquely identifying string that is associated with each of the DigitalOcean-provided public images. These can be used to reference a public image as an alternative to the numeric id.

## DigitalOcean.updateImageName
Retrieve information about a public image.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| imageId    | String     | Image id
| name       | String     | The new name that you would like to use for the image.

## DigitalOcean.deleteImage
Delete single image.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| imageId    | String     | Image id

## DigitalOcean.transferImage
Transfer an image to another region.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| imageId    | String     | Image id
| type       | Select     | Must be `transfer`
| region     | String     | The region slug that represents the region target.

## DigitalOcean.convertImageToSnapshot
Convert an image, for example, a backup to a snapshot.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| imageId    | String     | Image id
| type       | Select     | Must be convert

## DigitalOcean.getImageAction
Retrieve the status of an image action.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| imageId    | String     | Image id
| actionId   | String     | Action id

## DigitalOcean.createLoadBalancer
Create a new Load Balancer instance.

| Field              | Type       | Description
|--------------------|------------|----------
| accessToken        | credentials| Your Digital Ocean access token
| name               | String     | A human-readable name for a Load Balancer instance.
| algorithm          | String     | The load balancing algorithm used to determine which backend Droplet will be selected by a client. It must be either `round_robin` or `least_connections`. The default value is `round_robin`.
| region             | String     | The region where the Load Balancer instance will be located. When setting a region, the value should be the slug identifier for the region. When you query a Load Balancer, an entire region object will be returned.
| forwardingRules    | Array      | An array of objects specifying the forwarding rules for a Load Balancer. At least one forwarding rule is required when creating a new Load Balancer instance (see table below).
| healthCheck        | Array      | An object specifying health check settings for the Load Balancer. If omitted, default values will be provided (see table below).
| stickySessions     | Array      | An object specifying sticky sessions settings for the Load Balancer (see table below).
| redirectHttpToHttps| Boolean    | A boolean value indicating whether HTTP requests to the Load Balancer on port 80 will be redirected to HTTPS on port 443. Default value is false.
| dropletIds         | List       | An array containing the IDs of the Droplets to be assigned to the Load Balancer.

## DigitalOcean.createLoadBalancerWithTag
Create a new Load Balancer instance.

| Field              | Type       | Description
|--------------------|------------|----------
| accessToken        | credentials| Your Digital Ocean access token
| name               | String     | A human-readable name for a Load Balancer instance.
| algorithm          | String     | The load balancing algorithm used to determine which backend Droplet will be selected by a client. It must be either `round_robin` or `least_connections`. The default value is `round_robin`.
| region             | String     | The region where the Load Balancer instance will be located. When setting a region, the value should be the slug identifier for the region. When you query a Load Balancer, an entire region object will be returned.
| forwardingRules    | Array      | An array of objects specifying the forwarding rules for a Load Balancer. At least one forwarding rule is required when creating a new Load Balancer instance (see table below).
| healthCheck        | Array      | An object specifying health check settings for the Load Balancer. If omitted, default values will be provided (see table below).
| stickySessions     | Array      | An object specifying sticky sessions settings for the Load Balancer (see table below).
| redirectHttpToHttps| Boolean    | A boolean value indicating whether HTTP requests to the Load Balancer on port 80 will be redirected to HTTPS on port 443. Default value is false.
| tag                | String     | The name of a Droplet tag corresponding to Droplets to be assigned to the Load Balancer.

## DigitalOcean.getSingleBalancer
Create a new Load Balancer instance.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| balancerId | String     | Balancer ID.

## DigitalOcean.getAllBalancers
List all of the Load Balancer instances on your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token

## DigitalOcean.updateLoadBalancer
Update a Load Balancer's settings.

| Field              | Type       | Description
|--------------------|------------|----------
| accessToken        | credentials| Your Digital Ocean access token
| name               | String     | A human-readable name for a Load Balancer instance.
| algorithm          | String     | The load balancing algorithm used to determine which backend Droplet will be selected by a client. It must be either `round_robin` or `least_connections`. The default value is `round_robin`.
| region             | String     | The region where the Load Balancer instance will be located. When setting a region, the value should be the slug identifier for the region. When you query a Load Balancer, an entire region object will be returned.
| forwardingRules    | Array      | An array of objects specifying the forwarding rules for a Load Balancer. At least one forwarding rule is required when creating a new Load Balancer instance (see table below).
| healthCheck        | Array      | An object specifying health check settings for the Load Balancer. If omitted, default values will be provided (see table below).
| stickySessions     | Array      | An object specifying sticky sessions settings for the Load Balancer (see table below).
| redirectHttpToHttps| Boolean    | A boolean value indicating whether HTTP requests to the Load Balancer on port 80 will be redirected to HTTPS on port 443. Default value is false.
| tag                | String     | The name of a Droplet tag corresponding to Droplets to be assigned to the Load Balancer.
| dropletIds         | List       | An array containing the IDs of the Droplets to be assigned to the Load Balancer.

## DigitalOcean.deleteLoadBalancer
Delete a Load Balancer instance.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| balancerId | String     | Balancer ID.

## DigitalOcean.addDropletsToLoadBalancer
Assign a Droplet to a Load Balancer instance.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| balancerId | String     | Balancer ID.
| dropletIds | List       | An array containing the IDs of the Droplets to be assigned to the Load Balancer instance..

## DigitalOcean.removeDropletsFromLoadBalancer
Remove a Droplet from a Load Balancer instance.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| balancerId | String     | Balancer ID.
| dropletIds | List       | An array containing the IDs of the Droplets to be assigned to the Load Balancer instance..

## DigitalOcean.addForwardingRulesToLoadBalancer
Add an additional forwarding rule to a Load Balancer instance.

| Field         | Type       | Description
|---------------|------------|----------
| accessToken   | credentials| Your Digital Ocean access token
| balancerId    | String     | Balancer ID.
| entryProtocol | String     | The protocol used for traffic to the Load Balancer. The possible values are: `http`, `https`, or `tcp`.
| entryPort     | Number     | An integer representing the port on which the Load Balancer instance will listen.
| targetProtocol| String     | The protocol used for traffic from the Load Balancer to the backend Droplets. The possible values are: `http`, `https`, or `tcp`.
| targetPort    | Number     | An integer representing the port on the backend Droplets to which the Load Balancer will send traffic.
| certificateId | String     | The ID of the TLS certificate to be used for SSL termination.
| tlsPassthrough| Boolean    | A boolean value indicating whether SSL encrypted traffic will be passed through to the backend Droplets. The defaults value is false.

## DigitalOcean.removeForwardingRulesFromLoadBalancer
Remove forwarding rules from a Load Balancer instance.

| Field         | Type       | Description
|---------------|------------|----------
| accessToken   | credentials| Your Digital Ocean access token
| balancerId    | String     | Balancer ID.
| entryProtocol | String     | The protocol used for traffic to the Load Balancer. The possible values are: `http`, `https`, or `tcp`.
| entryPort     | Number     | An integer representing the port on which the Load Balancer instance will listen.
| targetProtocol| String     | The protocol used for traffic from the Load Balancer to the backend Droplets. The possible values are: `http`, `https`, or `tcp`.
| targetPort    | Number     | An integer representing the port on the backend Droplets to which the Load Balancer will send traffic.
| certificateId | String     | The ID of the TLS certificate to be used for SSL termination.
| tlsPassthrough| Boolean    | A boolean value indicating whether SSL encrypted traffic will be passed through to the backend Droplets. The defaults value is false.

## DigitalOcean.getAllRegions
List all of the regions that are available.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token

## DigitalOcean.getAllSizes
List all of the sizes that are available.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token

## DigitalOcean.getAllSnapshots
List all of the snapshots available on your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getAllDropletSnapshots
Retrieve only snapshots based on Droplets.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getAllVolumeSnapshots
Retrieve only snapshots based on volumes.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| page       | Number     | Page number
| perPage    | Number     | Number of items you would like per page

## DigitalOcean.getSingleSnapshot
Retrieve information about a snapshot.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| snapshotId | String     | The unique identifier for the snapshot.

## DigitalOcean.deleteSingleSnapshot
Delete a snapshot.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token
| snapshotId | String     | The unique identifier for the snapshot.

## DigitalOcean.getAllSshKeys
List all of the keys in your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token

## DigitalOcean.createSshKey
Add a new SSH public key to your DigitalOcean account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| name       | String     | The name to give the new SSH key in your account.
| publicKey  | String     | A string containing the entire public key.

## DigitalOcean.getSingleSshKey
Add a new SSH public key to your DigitalOcean account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| id         | String     | This is a unique identification number for the key. This can be used to reference a specific SSH key when you wish to embed a key into a Droplet.

## DigitalOcean.updateSshKey
Update the name of an SSH key.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| id         | String     | This is a unique identification number for the key. This can be used to reference a specific SSH key when you wish to embed a key into a Droplet.
| name       | String     | The name to give the new SSH key in your account.

## DigitalOcean.deleteSshKey
Destroy a public SSH key that you have in your account.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| id         | String     | This is a unique identification number for the key. This can be used to reference a specific SSH key when you wish to embed a key into a Droplet.

## DigitalOcean.createTag
Create new tag.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| name       | String     | Tags may contain letters, numbers, colons, dashes, and underscores. There is a limit of 255 characters per tag.
| resources  | JSON       | An embedded object containing key value pairs of resource type and resource statistics.

## DigitalOcean.getSingleTag
Retrieve an individual tag.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| name       | String     | Tag name

## DigitalOcean.getAllTags
List all of your tags.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.

## DigitalOcean.tagResource
Resources can be tagged.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| name       | String     | Tag name
| resources  | Array      | An array of objects containing resource_id and resource_type attributes.

## DigitalOcean.untagResource
Resources can be untagged.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| name       | String     | Tag name
| resources  | Array      | An array of objects containing resource_id and resource_type attributes.

## DigitalOcean.deleteTag
A Tag can be deleted.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| Your Digital Ocean access token.
| name       | String     | Tag name

