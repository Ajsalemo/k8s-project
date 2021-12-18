#!/bin/bash

kubectl apply -f service.yaml &&
    kubectl apply -f deployment.yaml && 
    # Show services
    echo "-------- Listing services --------"
    kubectl get svc && 
    # Show pods
    echo "---------- Listing pods ----------"
    kubectl get pods &&
    # Show deployments
    echo "------ Listing deployments -------"
    kubectl get deploy &&
    # Show replica sets
    echo "------ Listing replica sets -------"
    kubectl get rs
