#!/usr/bin/python
import pycurl
import sys
import json
from StringIO import StringIO

def getswitchesDPID():
		response_buffer = StringIO()
		curl = pycurl.Curl()
		curl.setopt(curl.URL, "http://localhost:8080/stats/switches")
		curl.setopt(curl.WRITEFUNCTION, response_buffer.write)
		curl.perform()
		curl.close()
		val = response_buffer.getvalue()
		print val

def getSwitchDetails(dpID):
		response_buffer = StringIO()
		curl = pycurl.Curl()
		curl.setopt(curl.URL, "http://localhost:8080/stats/desc/" + str(dpID))
		curl.setopt(curl.WRITEFUNCTION, response_buffer.write)
		curl.perform()
		curl.close()
		val = response_buffer.getvalue()
		print val
		
def getFlowDetails(dpID):
		response_buffer = StringIO()
		curl = pycurl.Curl()
		curl.setopt(curl.URL, "http://localhost:8080/stats/flow/" + str(dpID))
		curl.setopt(curl.WRITEFUNCTION, response_buffer.write)
		curl.perform()
		curl.close()
		val = response_buffer.getvalue()
		print val
		
def getPortDetails(dpID):
		response_buffer = StringIO()
		curl = pycurl.Curl()
		curl.setopt(curl.URL, "http://localhost:8080/stats/port/" + str(dpID))
		curl.setopt(curl.WRITEFUNCTION, response_buffer.write)
		curl.perform()
		curl.close()
		val = response_buffer.getvalue()
		print val
		
def getPortdescDetails(dpID):
		response_buffer = StringIO()
		curl = pycurl.Curl()
		curl.setopt(curl.URL, "http://localhost:8080/stats/portdesc/" + str(dpID))
		curl.setopt(curl.WRITEFUNCTION, response_buffer.write)
		curl.perform()
		curl.close()
		val = response_buffer.getvalue()
		print val
		
def getTableDetails(dpID):
		response_buffer = StringIO()
		curl = pycurl.Curl()
		curl.setopt(curl.URL, "http://localhost:8080/stats/table/" + str(dpID))
		curl.setopt(curl.WRITEFUNCTION, response_buffer.write)
		curl.perform()
		curl.close()
		val = response_buffer.getvalue()
		print val


def getGroupDetails(dpID):
		response_buffer = StringIO()
		curl = pycurl.Curl()
		curl.setopt(curl.URL, "http://localhost:8080/stats/group/" + str(dpID))
		curl.setopt(curl.WRITEFUNCTION, response_buffer.write)
		curl.perform()
		curl.close()
		val = response_buffer.getvalue()
		print val
		
def deleteflow(dpID):
		response_buffer = StringIO()
		curl = pycurl.Curl()
		curl.setopt(curl.URL, "http://localhost:8080/tats/flowentry/clear/" + str(dpID))
		curl.setopt(curl.WRITEFUNCTION, response_buffer.write)
		curl.perform()
		curl.close()
		val = response_buffer.getvalue()
		print val
		
def addFlow(str):
			#!print "hi"
			print str
			arr={}
			strArr=str.split(",")
			for aStr in strArr:
				tmpArr=aStr.split(":")
				arr[tmpArr[0]]=tmpArr[1]
				
			data = json.dumps({
			"dpid": arr["dpid"],
			"cookie": arr["cookie"],
			"cookie_mask": arr["cookie_mask"],
			"table_id": arr["table_id"],
			"idle_timeout": arr["idle_timeout"],
			"hard_timeout": arr["hard_timeout"],
			"priority": arr["priority"],
			"flags": arr["flags"],
			"actions":[
				{
					"type": arr["type"],
					"port": 2
				}
			],
		})
			print data
			curl = pycurl.Curl()
			curl.setopt(curl.URL, "http://localhost:8080/stats/flowentry/add")
			curl.setopt(curl.HTTPHEADER, ['Accept: application/json'])
			curl.setopt(curl.POST, 1)
			curl.setopt(curl.POSTFIELDS, data)
			curl.perform()
			curl.close()

			
			
ryuFunction =""

if (len(sys.argv) == 2):
	ryuFunction =sys.argv[1]
elif(len(sys.argv) == 3):
	ryuFunction =sys.argv[1]


if ryuFunction == "getswitchesDPID":
   getswitchesDPID()
elif(ryuFunction == "getSwitchDetails" and len(sys.argv) == 3):
   getSwitchDetails(sys.argv[2])
elif(ryuFunction == "addFlow" and len(sys.argv) == 3):
   addFlow(sys.argv[2])
elif(ryuFunction == "getFlowDetails" and len(sys.argv) == 3):
   getFlowDetails(sys.argv[2])
elif(ryuFunction == "getTableDetails" and len(sys.argv) == 3):
   getTableDetails(sys.argv[2])
elif(ryuFunction == "getPortDetails" and len(sys.argv) == 3):
   getPortDetails(sys.argv[2])
elif(ryuFunction == "getPortdescDetails" and len(sys.argv) == 3):
   getPortdescDetails(sys.argv[2])
elif(ryuFunction == "getGroupDetails" and len(sys.argv) == 3):
   getGroupDetails(sys.argv[2])







