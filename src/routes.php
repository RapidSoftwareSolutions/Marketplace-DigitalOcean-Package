<?php
$routes = [
    'metadata',
    'getActionsList',
    'getSingleAction',
    'getVolumesList',
    'createVolume',
    'getSingleVolume',
    'getVolumeByName',
    'getVolumeSnapshots',
    'createVolumeSnapshot',
    'deleteVolume',
    'deleteVolumeByName',
    'attachVolumeToDroplet',
    'attachVolumeToDropletByName',
    'removeVolumeFromDroplet',
    'removeVolumeFromDropletByName',
    'resizeVolume',
    'getVolumeActions',
    'getSingleVolumeAction',
    'createCertificate',
    'getSingleCertificate',
    'getAllCertificates',
    'deleteCertificate',
    'getAllDomains',
    'createDomain',
    'getSingleDomain',
    'deleteDomain',
    'getAllDomainRecords',
    'createDomainRecord',
    'getSingleDomainRecord',
    'updateDomainRecord',
    'deleteDomainRecord',
    'createDroplet',
    'createMultiplyDroplets',
    'getSingleDroplet',
    'getAllDroplets',
    'getAllDropletsByTag',
    'getAvailableKernels',
    'getKernelSnapshots',
    'getKernelBackups',
    'getKernelActions',
    'deleteDroplet',
    'deleteDropletByTag',
    'getDropletNeighbors',
    'getAllNeighbors',
    'enableBackups',
    'disableBackups',
    'rebootDroplet',
    'dropletPowerCycle',
    'dropletShutdown',
    'dropletPowerOff',
    'dropletRestore',
    'dropletPasswordReset',
    'resizeDroplet',
    'rebuildDroplet',
    'renameDroplet',
    'changeDropletKernel',
    'enableIPv6ToDroplet',
    'enablePrivateNetworkingToDroplet',
    'dropletSnapshot',
    'taggedDropletAction',
    'getDropletAction',
    'getFloatingIps',
    'createFloatingIp',
    'createRegionFloatingIp',
    'getSingleFloatingIp',
    'deleteFloatingIp',
    'assignFloatingIpToDroplet',
    'unassignFloatingIp',
    'getAllFloatingIpActions',
    'getSingleFloatingIpAction',
    'createFirewall',
    'getSingleFirewall',
    'getAllFirewalls',
    'updateFirewall',
    'deleteFirewall',
    'addDropletToFirewall',
    'removeDropletFromFirewall',
    'addTagsToFirewall',
    'removeTagsToFirewall',
    'addRulesToFirewall',
    'removeRulesToFirewall',
    'getAllImages',
    'getAllDistributionImages',
    'getAllApplicationImages',
    'getAllUserImages',
    'getImageActions',
    'getSingleImage',
    'getImageBySlug',
    'updateImageName',
    'deleteImage',
    'transferImage',
    'convertImageToSnapshot',
    'getImageAction',
    'createLoadBalancer',
    'createLoadBalancerWithTag',
    'getSingleBalancer',
    'getAllBalancers',
    'updateLoadBalancer',
    'deleteLoadBalancer',
    'addDropletsToLoadBalancer',
    'removeDropletsFromLoadBalancer',
    'addForwardingRulesToLoadBalancer',
    'removeForwardingRulesFromLoadBalancer',
    'getAllRegions',
    'getAllSizes',
    'getAllSnapshots',
    'getAllDropletSnapshots',
    'getAllVolumeSnapshots',
    'getSingleSnapshot',
    'deleteSingleSnapshot',
    'getAllSshKeys',
    'createSshKey',
    'getSingleSshKey',
    'updateSshKey',
    'deleteSshKey',
    'createTag',
    'getSingleTag',
    'getAllTags',
    'tagResource',
    'untagResource',
    'deleteTag'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

